@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body" style="
            background: url('https://images.wikia.nocookie.net/memoryalpha/en/images/c/c8/Articletype_multiple.png') no-repeat center center;
            background-size: cover;"
        ></div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column is-8-desktop is-12-tablet">

                    <div class="content">
                        <h1>Welcome to Starfleet home.</h1>
                        <div class="card">
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="image is-128x128">
                                            <img class="is-rounded" src="https://static.wikia.nocookie.net/memoryalpha/images/2/25/Jean-Luc_Picard%2C_2399.png/revision/latest/scale-to-width-down/350?cb=20200327033619&path-prefix=en" alt="Placeholder image">
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <p class="title is-4"> Captain Jean-Luc Picard ("The First Duty")</p>
                                    </div>
                                </div>

                                <div class="content is-italic">
                                    "The first duty of every Starfleet officer is to the truth. Whether it's scientific
                                    truth, or historical truth, or personal truth. It is the guiding principle upon
                                    which Starfleet is based."
                                    <br>
                                    <time datetime="2016-1-1">Stardate 2368</time>
                                </div>
                            </div>
                        </div>
                        <p>
                            Starfleet was the deep space exploratory and defense service maintained by the United
                            Federation of Planets. Its principal functions included the advancement of Federation
                            knowledge about the galaxy and its inhabitants, the advancement of Federation science and
                            technology, the defense of the Federation, and the facilitation of Federation diplomacy.
                        </p>
                        <p>
                            As per its mandate of deep space exploration, its personnel were frequently brought into
                            contact with cultures and sentient species whose existences were unknown to the Federation.
                            Starfleet officers therefore acted as official representatives of the Federation in these
                            cases. Starfleet vessels were also frequently used to ferry ambassadors on diplomatic
                            missions. (TNG: "The Last Outpost", "Conspiracy"; VOY: "Innocence", "The Void"; TOS:
                            "Journey to Babel"; Star Trek)
                        </p>
                        <p>
                            Blandit mollis felis gravida sem ad venenatis ut a lacus! Magna odio netus, torquent rhoncus
                            fames velit. Adipiscing libero, class cursus ipsum penatibus enim mollis netus. Sociis
                            luctus eros sapien platea parturient fringilla. Senectus purus tincidunt laoreet purus
                            praesent. Accumsan pulvinar tincidunt gravida malesuada senectus proin, elit cubilia
                            lobortis quisque tellus? Torquent dis natoque sapien natoque sagittis conubia pulvinar risus
                            elementum hac adipiscing arcu. Sem nisl fusce phasellus adipiscing pretium eget hendrerit
                            proin non. Vestibulum lacus magna, commodo volutpat.
                        </p>
                        <p>
                            Vivamus ridiculus amet arcu. Magnis venenatis vehicula venenatis molestie molestie proin sed
                            blandit, inceptos volutpat. Auctor auctor massa sodales ipsum. Congue est quisque porta?
                            Porta phasellus sem torquent ad feugiat sollicitudin nisi tempor tortor habitasse. Eros
                            condimentum enim blandit pulvinar. Justo aenean, taciti curae; diam volutpat cubilia ante
                            vestibulum. Augue penatibus phasellus inceptos tortor convallis ridiculus at ad. Nisl
                            curabitur vel gravida, montes sit velit pellentesque. Sem, dapibus maecenas urna lectus
                            mauris quisque nibh accumsan amet curabitur egestas dolor. Sagittis montes magnis quam
                            fringilla accumsan bibendum. Nisl, a laoreet himenaeos sapien lorem quisque taciti lacus
                            elit mauris. Mollis eleifend montes commodo? Accumsan nullam venenatis malesuada netus metus
                            sociosqu magnis velit. Rhoncus lacus tempus praesent fermentum netus ullamcorper dolor
                            integer nulla.
                        </p>
                        <p>
                            Habitasse suspendisse egestas vestibulum pellentesque per leo enim metus donec ad. Hac metus
                            convallis nibh eget, parturient dis elementum posuere. Felis, ultricies fusce est cubilia
                            facilisis odio id velit dapibus suspendisse. Erat praesent nullam aliquam. Rutrum commodo
                            eget malesuada per montes, curae; senectus convallis sociis per. Risus mattis justo vivamus
                            lorem bibendum aenean eleifend facilisi, suscipit consectetur libero litora. Interdum?
                        </p>
                    </div>
                </div>

                <div class="column is-4-desktop is-12-tablet">
                    <p class="title is-4">Latest news</p>

                    <div class="columns is-multiline">

                        @foreach($latestPosts as $post)
                            <div class="column is-12">
                                <div class="card">

                                    <div class="card-image">
                                        <img src="{{$post->img_url}}" alt="Post picture">
                                    </div>

                                    <div class="card-content">
                                        <div class="content">

                                            <a class="title is-4" href="/posts/{{$post->id}}">{{$post->title}}</a>

                                            <p>{{$post->excerpt}}</p>
                                        </div>
                                        <div class="has-text-centered">
                                            <a href="/posts/{{$post->id}}" class="button is-primary">Read more...</a>
                                        </div>
                                    </div>
                                    <footer class="card-footer">
                                        <p class="card-footer-item">Published: {{ $post->published_at }}</p>
                                    </footer>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
