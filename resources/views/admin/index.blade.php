@extends('layouts.admin')
    @section('content')
        <h1>Simple Sidebar</h1>
        @if(session('message'))
            <div class="alert alert-info">{{session('message')}}</div>
        @endif
        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
    @endsection