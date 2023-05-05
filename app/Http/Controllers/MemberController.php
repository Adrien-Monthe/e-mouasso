<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['members'] = Member::orderBy('id', 'desc')->get();
        return view('backend.pages.members.show-members', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [];
        return view('backend.pages.members.create-member', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {
        $member_id = $request->member_id;

        $member = Member::updateOrCreate(['id' => $member_id],
            [
                'name' => $request->name,
                'email' => $request->email,
                'jobtitle' => [
                    'en' => $request->jobtitle_en,
                    'fr' => $request->jobtitle_fr
                ],
                'heading' => [
                    'en' => $request->heading_en,
                    'fr' => $request->heading_fr
                ],
                'short_description' => [
                    'en' => $request->short_description_en,
                    'fr' => $request->short_description_fr
                ],
                'description' => [
                    'en' => $request->description_en,
                    'fr' => $request->description_fr
                ],
                'phonenumber' => $request->phonenumber,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'whatsapp' => $request->whatsapp,
                'instagram' => $request->instagram,




            ]);

        return redirect()->route('members.index', app()->getLocale())->with('success', 'member has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberRequest $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}
