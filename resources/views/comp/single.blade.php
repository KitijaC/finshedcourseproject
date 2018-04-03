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
                <a href="/articles">Articles</a>
              </li>
              <li>
                  <a href="/articles" class="active">Article Title</a>
              </li>
          </ol>
         </div>
                                                                <!-- Ariticle -->
        <div class="container articlesPage big">
            <div class="col-sm-6 images-col ">
                <div class="row">
                    <div class="col-xs-12">
                        <a data-fancybox="gallery" rel="gallery1" href="img/cat8.jpg"">
                            <img src="img/cat8.jpg"">
                        </a>
                    </div>
                </div>
                            <div class="row galleryImg">
                                <div class="col-xs-4">
                                    <a data-fancybox="gallery" rel="gallery1" href="img/cat2.jpg">
                                        <img src="img/cat2.jpg">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a data-fancybox="gallery" rel="gallery1" href="img/cat3.jpg">
                                        <img src="img/cat3.jpg">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a data-fancybox="gallery" rel="gallery1" href="img/cat4.jpg">
                                        <img src="img/cat4.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="row galleryImg">
                                <div class="col-xs-4">
                                    <a data-fancybox="gallery" rel="gallery1" href="img/cat5.jpg">
                                        <img src="img/cat5.jpg">
                                    </a>
                                </div>
                                                      
                                <div class="col-xs-4">
                                    <a data-fancybox="gallery" rel="gallery1" href="img/cat6.jpg">
                                        <img src="img/cat6.jpg">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a data-fancybox="gallery" rel="gallery1" href="img/cat7.jpg">
                                        <img src="img/cat7.jpg">
                                </a>
                                </div>
                            
                        </div>
                    </div>
                    
                    
                    <div class="col-xs-6">
                        <h4>Title</h4>
                        <p class="allArticles">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati atque voluptate assumenda, corporis accusantium libero laudantium rem incidunt delectus voluptatum unde, sit nulla pariatur provident eveniet quasi impedit minima deleniti molestias porro non perferendis. Libero, saepe doloremque vero placeat necessitatibus fugit. Corrupti sequi placeat magnam totam animi officia expedita, perferendis perspiciatis consectetur ipsa ut sed. Inventore nisi beatae in necessitatibus minus autem deserunt placeat laboriosam ducimus. Nisi alias quam voluptatum perferendis repellendus at rerum, eaque voluptate quae cupiditate veritatis, itaque provident labore odio, accusantium atque minima quaerat architecto natus? Neque voluptates ratione asperiores natus voluptate error. Dolore veniam, soluta ab debitis inventore, necessitatibus nam illum nesciunt, unde error in. Iure tempore explicabo libero necessitatibus? Numquam quo iste aliquam repellat quasi iusto saepe architecto. Non esse ratione nemo doloribus laudantium ipsam impedit vitae, dolores iste consequuntur facere alias velit quis labore voluptate dignissimos animi repudiandae quidem maiores veritatis quisquam praesentium, vel aspernatur enim. Cum atque quisquam ut exercitationem, labore sunt corporis omnis reprehenderit asperiores hic consequuntur nobis rem aliquid perspiciatis minus placeat similique! Ducimus suscipit iste ex officia ipsum molestiae nostrum facere magnam voluptates blanditiis enim facilis provident a ullam quam quaerat rem error, adipisci possimus iure eligendi natus voluptatibus unde odit! Optio ex excepturi, et veritatis neque officia voluptate, fuga eaque nam vero obcaecati modi soluta molestiae illum aperiam eos a doloremque adipisci vel! Odit alias laboriosam in eveniet tenetur, facilis quaerat inventore, saepe esse odio unde dolorum aperiam modi omnis iure sapiente, maxime hic soluta rem sequi enim dignissimos!
                        </p>
                    </div>
                 

            </div>
        </div>
    </main>

    @endsection