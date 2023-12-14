<h1>Career Request from PARISSIS website</h1>
<p><b>Name:</b> {{ $name }}</p>
<p><b>Email:</b> {{ $email }}</p>
<p><b>Phone:</b> {{ $phone }}</p>
<p><b>Message:</b> <?php $message = preg_replace('/\r\n|\r|\n/','<br/>',$msg_client); echo $message; ?></p>
<p>You can find the CV attached</p>