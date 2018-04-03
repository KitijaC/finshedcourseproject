@extends('layout')

@section('content')

<main>
                                                 <!-- Current posion on the website -->
        
        <div class="container">
            <ol class="breadcrumb" class="currentPage">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/chat" class="active">Chat</a>
                </li>
            </ol>
        </div>

                                                        <!-- Chat window -->
        <div class="container">


                                                        <!-- Chat-message -->
        <div class="row" id="chat">

                <div class="col-sm-12 ">
                    <div class="chat-main-window">
                        <div class="chat-message" v-for="message in messages">
                            <h5>@{{ message.username }} <em>@{{ message.date }}</em></h5>
                            <p>@{{ message.text }}</p>
                        </div>
                        
                        
                    </div>
                </div>

                                                        <!-- Chat input -->
                <div class="col-sm-12 ">
                    <div class="chat-message-form">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="chat-username-input">Username</label>
                                <input v-model="newMessageUsername" type="text" class="form-control" id="chat-username-input">
                            </div>
                        </div>
                        <div class="row">
                        
                            <div class="form-group col-sm-10">
                                <label for="chat-text-input">Message</label>
                                <textarea v-model="newMessageText" class="form-control" id="chat-text-input"></textarea>
                            </div>
                            <div class="form-group col-sm-2">
                                <button class="btn btn-primery" id="chat-send-message-button" v-on:click="sendMessage()">Send</button>
                            </div>
                        </div>

                    </div>
            </div>

            
        </div>
    </div>

    </main>

    @endsection