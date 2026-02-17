<?php

namespace App\Http\Controllers;

use App\Models\ChatParticipant;
use App\Http\Requests\StoreChatParticipantRequest;
use App\Http\Requests\UpdateChatParticipantRequest;

class ChatParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChatParticipantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ChatParticipant $chatParticipant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChatParticipant $chatParticipant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChatParticipantRequest $request, ChatParticipant $chatParticipant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChatParticipant $chatParticipant)
    {
        //
    }
}
