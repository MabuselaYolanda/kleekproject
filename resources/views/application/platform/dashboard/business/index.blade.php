@extends('partials.app')


@section('content')
    @include('partials.navbar_app')
    <div class="content-i">
        <div class="content-box">
            <div class="support-index">
                <div class="support-tickets">
                    <div class="support-tickets-header">
                        <div class="tickets-control">
                            <h5>
                                Temporary Employee Index
                            </h5>
                        </div>
                    </div>
                    <livewire:employee>
                </div>
                <div class="support-ticket-content-w">
                    <div class="support-ticket-content">
                        <div class="support-ticket-content-header">
                            <h3 class="ticket-header">
                                Business Logs
                            </h3>
                        </div>
                        <div class="ticket-thread">
                            <div class="ticket-reply highlight">
                                <div class="ticket-reply-info">
                                    <a class="author with-avatar" href="#"><img alt="" src="{{ $profile->avatar }}"><span>{{ Auth::user()->name .' '. Auth::user()->surname }}</span></a><span class="info-data"><span class="label">replied on</span><span class="value">May 12th, 2017 at 11:23am</span></span><span class="badge badge-success">support agent</span>
                                    <div class="actions" href="#">
                                        <i class="os-icon os-icon-ui-46"></i>
                                        <div class="actions-list">
                                            <a href="#"><i class="os-icon os-icon-ui-49"></i><span>Edit</span></a><a href="#"><i class="os-icon os-icon-ui-09"></i><span>Mark Private</span></a><a href="#"><i class="os-icon os-icon-ui-03"></i><span>Favorite</span></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i><span>Delete</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="ticket-reply-content">
                                    <p>
                                        Hi. your large order was dispatched .
                                    </p>
                                    <p>
                                        Is there any way to add new team members to process the app faster?
                                    </p>
                                    <p>
                                        Thank you.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="support-ticket-info">
                        <a class="close-ticket-info" href="#"><i class="os-icon os-icon-ui-23"></i></a>
                        <div class="customer">
                            <div class="avatar">
                                <img alt="" src="img/avatar1.jpg">
                            </div>
                            <h4 class="customer-name">
                                {{ $business->name }}
                            </h4>
                            <div class="customer-tickets">
                                120000 Orders
                            </div>
                        </div>
                        <h5 class="info-header">
                            Business Info
                        </h5>
                        <div class="info-section text-center">
                            <div class="label">
                                Type:
                            </div>
                            <div class="value">
                                <div class="badge badge-primary">
                                {{ $business->type }}
                                </div>
                            </div>
                        </div>
                        <h5 class="info-header">
                            Last Week's Staff
                        </h5>
                        <div class="info-section">
                            <ul class="users-list as-tiles">
                                <li>
                                    <a class="author with-avatar" href="#">
                                        <div class="avatar" style="background-image: url(&#39;img/avatar1.jpg&#39;)"></div>
                                        <span>John Mayers</span></a>
                                </li>
                                <li>
                                    <a class="author with-avatar" href="#">
                                        <div class="avatar" style="background-image: url(&#39;img/avatar3.jpg&#39;)"></div>
                                        <span>Phil Collins</span></a>
                                </li>
                                <li>
                                    <a class="author with-avatar" href="#">
                                        <div class="avatar" style="background-image: url(&#39;img/avatar4.jpg&#39;)"></div>
                                        <span>Carl Lewis</span></a>
                                </li>
                                <li>
                                    <a class="author with-avatar" href="#">
                                        <div class="avatar" style="background-image: url(&#39;img/avatar5.jpg&#39;)"></div>
                                        <span>Joshua Kim</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
@stop
