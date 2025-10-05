<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as RequestModel;

class RequestController extends Controller
{
    //
    public function createRequest(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'post_id' => 'required|exists:posts,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $request = RequestModel::create($validated);
        return response()->json($request, 201);
    }

    public function acceptRequest(Request $request, $id)
    {
        $request = RequestModel::find($id);
        $request->status = 'accepted';
        $request->save();
        return response()->json($request, 200);
    }

    public function rejectRequest(Request $request, $id)
    {
        $request = RequestModel::find($id);
        $request->status = 'rejected';
        $request->save();
        return response()->json($request, 200);
    }

    public function getRequestsByPostId($post_id)
    {
        $requests = RequestModel::where('post_id', $post_id)->get();
        return response()->json($requests, 200);
    }

    public function getRequestsByUserId($user_id)
    {
        $requests = RequestModel::where('user_id', $user_id)->get();
        return response()->json($requests, 200);
    }

    public function getRequests()
    {
        $requests = RequestModel::all();
        return response()->json($requests, 200);
    }

    public function getRequest($id)
    {
        $request = RequestModel::find($id);
        return response()->json($request, 200);
    }

    public function updateRequest(Request $request, $id)
    {
        $request = RequestModel::find($id);
        $request->update($request->all());
        return response()->json($request, 200);
    }
}
