<html>
<head></head>
<body style="background-color: whitesmoke">
<div style="background-color: gray">
    <a class="navbar-brand" href="#" style="border:0;padding:0">
        <img src="{{asset('images/blogo.png')}}" alt="logo" height="60">
    </a>

</div>

<div>
    <h3>Email inviata da: {{$title}}</h3>
    <h4>mail: {{$mailfrom}}</h4>
    <h5>Testo del messaggio: {{$content}}</h5>
</div>

</body>
</html>