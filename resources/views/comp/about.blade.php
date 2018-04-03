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
                    <a href="/about" class="active">About us</a>
                </li>
            </ol>
        
                                                            <!-- Tabs -->

        <div id="tabs">
            <ul>
                <li ><a class="fragment1" href="#fragment-1"><span>About</span></a></li>
                <li ><a class="fragment2" href="#fragment-2"><span>Projects</span></a></li>
                <li ><a class="fragment2" href="#fragment-3"><span>History</span></a></li>
            </ul>
            <div id="fragment-1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, labore? Aut, nulla obcaecati ad iure eos quo? Alias recusandae similique ab, dolorum tenetur molestias labore commodi velit ad tempore iste? Beatae explicabo iste eligendi vitae aperiam error. Facilis inventore expedita reprehenderit eum adipisci quia fuga, eos perferendis corporis totam, dicta porro. Rem debitis hic praesentium nobis? Consequatur obcaecati fuga quam a ad molestias dolore ullam aspernatur eum hic culpa necessitatibus nihil id praesentium delectus, magni, et soluta doloremque voluptatibus ea odit, ipsum possimus nulla nesciunt? Perspiciatis nisi quos eveniet! Voluptas perferendis modi dolorum, dolor dicta, ullam dolore inventore officiis placeat ut magni odit enim iure aliquam ea debitis vitae atque eos labore fuga beatae. Fuga ex est libero ipsa sit.
            </div>
            <div id="fragment-2">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
            </div>
            <div id="fragment-3">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
            </div>
        </div>
<div class="row">
        <div class="col-xs-12">
            <h4>Contacts</h4>
        </div>
</div>
<div class="row">
        <div class="col-xs-4">
          <div id="map">

          </div>

        </div>

        <div class="col-xs-8">
          <h4>Address:</h4>
          <p>
            8039 County Street <br>
            Anaheim, CA 92806
          </p>
          <h4>E-mail:</h4>
          <p>
            info@catnat.com
          </p>
          <h4>Phone:</h4>
          <p>
            +1-202-555-0185
          </p>
        </div>
      </div>

    </main>

@endsection