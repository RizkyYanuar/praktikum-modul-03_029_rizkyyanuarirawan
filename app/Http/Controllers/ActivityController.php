<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Models\Activity;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Services\ActivityService;
use DomainException;

class ActivityController extends Controller
{
    public function index(): View
    {
        $validStatus = ['Planned', 'Ongoing', 'Done'];

        $status = request('status');

        $status = in_array($status, $validStatus, true) ? $status : null;

        $activities = Activity::query()
            ->when($status, function ($query) use ($status) {
                $query->where('status', $status);
            })
            ->latest()
            ->get();

        return view('activities.index', compact(
            'activities',
            'status',
        ));
    }

    public function create(): View
    {
        return view('activities.create');
    }


    public function show(Activity $activity): View
    {
        return view('activities.show', compact('activity'));
    }

    public function edit(Activity $activity): View
    {
        return view('activities.edit', compact('activity'));
    }

    public function store(
        StoreActivityRequest $request,
        ActivityService $service
    ): RedirectResponse {
        $activity = $service->create($request->validated());
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
}
