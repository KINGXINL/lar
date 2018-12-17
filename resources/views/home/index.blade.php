@include('header')
<body>
<div id="app">
    @include('base')
    <main class="py-4">
        <div id="content">
            <div class="content-main">
                <article class="post clearfix" itemscope="" itemtype="http://schema.org/Article">
                    <header class="post-header">
                        <h1 class="entry-title"><a href="{{ route('home/homes.show',$user->id) }}" rel="bookmark">MyPersimmon Test</a></h1>
                        <div class="post-date">
                            <time class="fa fa-calendar date" datetime="2017-03-31T08:27:33+00:00"
                                  itemprop="datePublished" pubdate=""> 31 March , 2017
                            </time>
                            <span class="views fa fa-eye" itemprop="views"> 9 views</span>
                        </div>
                        <div class="clear"></div>
                    </header>
                    <div class="post-content post-desc" itemprop="articleBody">
                        <p>This is MyPersimmon Test Article....</p>

                        <p>[<a href="http://master.com/post/mypersimmon-test" rel="nofollow">阅读更多 →</a>]</p>

                        <div class="clear"></div>
                    </div>
                    <footer class="post-footer" itemprop="keywords">
                        <li>
                        </li>
                        <div class="clear"></div>
                    </footer>
                </article>
                <article class="post clearfix" itemscope="" itemtype="http://schema.org/Article">
                    <header class="post-header">
                        <h1 class="entry-title"><a href="http://master.com/post/hello-world" rel="bookmark">你好
                                MyPersimmon！</a></h1>
                        <form action="/lar/public/home/homes" method="post" enctype="multipart/form-data">{{ csrf_field() }}<textarea name="cla">2333</textarea><button type="submit">2333</button></form>
                        <div class="post-date">
                            <time class="fa fa-calendar date" datetime="2017-03-31T08:12:58+00:00"
                                  itemprop="datePublished" pubdate=""> 31 March , 2017
                            </time>
                            <span class="views fa fa-eye" itemprop="views"> 10 views</span>
                        </div>
                        <div class="clear"></div>
                    </header>
                    <div class="post-content post-desc" itemprop="articleBody">
                        <p>你好 MyPersimmon！
                            MyPersimmon 是一个基于Laravel 5.4 开发的开源博客.
                            您对MyPersimmon的使用就是对MyPersimmon最好的支持。
                            如果您在使用过程中遇到什么问题的，或者遇到什么bug的，或者新功能的建议和意见，欢迎到 https://github.com/Cong5/myPersimmon/issues
                            来给我提建议。...</p>

                        <p>[<a href="http://master.com/post/hello-world" rel="nofollow">阅读更多 →</a>]</p>

                        <div class="clear"></div>
                    </div>
                    <footer class="post-footer" itemprop="keywords">
                        <li>
                            <i class="fa fa-tag"></i> <a href="http://master.com/tags/MyPersimmon" rel="tag">MyPersimmon</a>&nbsp;&nbsp;
                        </li>
                        <div class="clear"></div>
                    </footer>
                </article>
            </div>
            @include('footer')
        </div>
    </main>
</div>
</body>