@extends('layouts.app')

@section('content')

    <!-- Headings -->
    <div class="widget first">
        <div class="head"><h5 class="iUser">User Profile</h5></div>
        <div class="body">
            <div class="pics">
                <ul>
                    <li>
                        <a href="{{ url('/images/avatar_profile.png') }}" title="" rel="prettyPhoto"><img src="{{ url('/images/avatar_profile_miniature.png') }}" alt="" /></a>
                    </li>
                </ul>
            </div>

            <table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
                <tbody>
                <tr class="noborder">
                    <td width="50%">Username:</td>
                    <td align="right">
                        <strong class="black">
                            {{ $user->username }}
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>First Name:</td>
                    <td align="right">
                        @if($myself == true)
                            @if(!isset($user->first_name))
                                [None]
                            @else
                                {{ $user->first_name }}
                            @endif
                        @else
                            @if($user->show_name == true)
                                {{ $user->first_name }}
                            @else
                                [Hidden]
                            @endif
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td align="right">
                        @if($myself == true)
                            @if(!isset($user->last_name))
                                [None]
                            @else
                                {{ $user->last_name }}
                            @endif
                        @else
                            @if($user->show_name == true)
                                {{ $user->last_name }}
                            @else
                                [Hidden]
                            @endif
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Rank:</td>
                    <td align="right">
                        <strong class="{{ __('roles.'.$role.'.color') }}">
                            {{ __('roles.'.$role.'.name') }}
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td align="right">
                        @if($myself == true)
                            {{ $user->email }}
                        @else
                            @if($user->show_email == true)
                                {{ $user->email }}
                            @else
                                [Hidden]
                            @endif
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Joined:</td>
                    <td align="right">
                        <span class="expire">
                            {{ $user->created_at }}
                        </span>
                    </td>
                </tr>
                </tbody>
            </table>
            @if($myself == false)
            <div class="submitForm" style="margin-top: 25px;">
                <form action="{{ url('/messages/new/'.$user->username) }}">
                    <input type="submit" value="Send Message" class="blueBtn">
                </form>
            </div>
            @endif
        </div>
    </div>
@endsection