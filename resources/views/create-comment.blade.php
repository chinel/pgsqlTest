<!DOCTYPE HTML>
<html>
<head>
    <title>User Card - Create comment</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    <noscript><link rel="stylesheet" href="{{asset('assets/css/noscript.css')}}" /></noscript>
</head>
<body class="is-preload">
<div id="wrapper">
    <section id="main">
        <header>
            <p>Create a new comment</p>
        </header>
        <div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p style="color:red;">{{ $error }}</p>
                @endforeach

            @endif

            @if (session('success'))
                <div style="color:green;">
                    {{ session('success')}}
                </div>
            @endif

            @if (session('error'))
                <div style="color:red;">
                    {{ session('error')}}
                </div>
            @endif
        </div>
        <Form action="{{url('/createComment')}}" method="post">
            @csrf
            <label>User ID</label>
            <input type="number" name="id" min="0"/>
            <br/>
            <label>Password</label>
            <input type="password" name="password"/>
            <br/>
            <label>Comment</label>
            <textarea rows="2" name="comments"></textarea>
            <br/>
            <input type="submit" value="Submit"/>
        </Form>
    </section>
    <footer id="footer">
        <ul class="copyright">
            <li>&copy; Pictureworks</li>
        </ul>
    </footer>

</div>
<script>
    if ('addEventListener' in window) {
        window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
    }
</script>
</body>
</html>
