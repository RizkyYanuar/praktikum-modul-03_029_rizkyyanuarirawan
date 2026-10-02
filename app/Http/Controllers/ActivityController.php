<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Models\Activity;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Services\ActivityService;
use DomainException;
use App\Models\Category;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(Request $request): View
    {
        $categories = Category::all();

        $validStatus = ['Planned', 'Ongoing', 'Done'];
        $status = $request->input('status');
        $status = in_array($status, $validStatus, true) ? $status : null;

        $activities = Activity::query()
            ->with('category')
            ->search($request->input('search'))
            ->filter([
                'category_id' => $request->input('category_id'),
                'status' => $status
            ])
            ->sortDate($request->input('sort'))
            ->paginate(10)
            ->withQueryString();

        return view('activities.index', compact(
            'activities',
            'categories',
            'status'
        ));
    }

    public function create(): View
    {
        $categories = Category::all();
        return view('activities.create', compact('categories'));
    }


    public function show(Activity $activity): View
    {
        return view('activities.show', compact('activity'));
    }

    public function edit(Activity $activity): View
    {
        $categories = Category::all();

        return view('activities.edit', compact('activity', 'categories'));
    }

    public function store(
        StoreActivityRequest $request,
        ActivityService $service
    ): RedirectResponse {
        $validated = $request->validated();

        $validated['status'] = 'Planned';

        $activity = $service->create($validated);
        return to_route('activities.show', $activity)
            ->with('success', 'Kegiatan berhasil dibuat.');
    }
    public function update(
        UpdateActivityRequest $request,
        Activity $activity,
        ActivityService $service
    ): RedirectResponse {
        try {
            $service->update($activity, $request->validated());
        } catch (DomainException $exception) {
            return back()
                ->withErrors(['status' => $exception->getMessage()])
                ->withInput();
        }
        return to_route('activities.show', $activity)
            ->with('success', 'Kegiatan berhasil diperbarui.');
    }

    public function destroy(Activity $activity): RedirectResponse
    {
        $activity->delete();

        return redirect()
            ->route('activities.index')
            ->with('success', 'Aktivitas berhasil dihapus.');
    }

    public function publish(Activity $activity)
    {
        if ($activity->status !== 'Planned') {
            return back()->with('error', 'Hanya kegiatan Planned yang bisa dipublish.');
        }

        $activity->update(['status' => 'Ongoing']);
        return back()->with('success', 'Kegiatan berhasil dipublish.');
    }

    public function complete(Activity $activity)
    {
        $activity->update(['status' => 'Done']);
        return back()->with('success', 'Kegiatan ditandai selesai.');
    }
}
