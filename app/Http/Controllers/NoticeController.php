<?php

namespace App\Http\Controllers;

use App\Models\Notices;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notices::all();
        return view('notice.index', compact('notices'));
    }
    public function create()
    {
        return view('notice.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'notice' => 'required',
            'priority' => 'required|numeric'
        ]);
        Notices::create($data);
        return redirect(route('notice.index'))->with('success', 'Notice Added Successfully');
    }
    public function edit($id)
    {
        $notice = Notices::find($id);
        return view('notice.edit', compact('notice'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'notice' => 'required',
            'priority' => 'required|numeric'
        ]);
        $notice = Notices::find($id);
        $notice->update($data);
        return redirect(route('notice.index'))->with('success', 'Notice Updated Successfully');
    }
    public function delete(Request $request)
    {
        $notice = Notices::find($request->dataid);
        $notice->delete();
        return redirect(route('notice.index'))->with('success', 'Notice Deleted Successfully');
    }
}
