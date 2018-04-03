@extends('layout')

@section('content')

<main>
                                                        <!-- The Slider -->
       <div class="container">
            <div class="row">
                <div class="col-xs-12 slider">
                    <img src="img/cat.jpg" class="shadow" alt=""> 
                </div>
            </div>
                                                        <!-- Small article preview -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 small-article">
                            <div class="row">
                                <div class="col-xs-4 hidden-xs ">
                                    <img src="img/cat7.jpg">
                                </div>

                                <div class="col-xs-12 col-sm-8">
                                    <h4>Title</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, in imperdiet, mi pede in. Est vel, posuere suspendisse. Sed quis. Sed tincidunt. Ligula at.
                                        <a href="/single" class="readMore">Read more...</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 small-article">
                            <div class="row">
                                <div class="col-xs-4 hidden-xs ">
                                    <img src="https://www.bluecross.org.uk/sites/default/files/assets/images/124044lpr.jpg">
                                </div>
    
                                <div class="col-xs-12 col-sm-8">
                                    <h4>Title</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, in imperdiet, mi pede in. Est vel, posuere suspendisse. Sed quis. Sed tincidunt. Ligula at.
                                        <a href="/single" class="readMore">Read more...</a>
                                    </p>
                                </div>
                            </div>
                         </div>
                         <div class="col-xs-12 col-sm-6 col-md-4 small-article">
                                <div class="row">
                                    <div class="col-xs-4 hidden-xs ">
                                        <img src="img/cat6.jpg">
                                    </div>
        
                                    <div class="col-xs-12 col-sm-8">
                                        <h4>Title</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, in imperdiet, mi pede in. Est vel, posuere suspendisse. Sed quis. Sed tincidunt. Ligula at.
                                            <a href="/single" class="readMore">Read more...</a>
                                        </p>
                                    </div>
                                </div>
                         </div>
                     </div>
</main>

@endsection