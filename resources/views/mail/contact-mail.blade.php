<h2>Hello Admin,</h2>
You received an email from : <b>{{ $details['email'] }}</b><br>
Here are the details:<br>
<table width="50%" border="1" style="margin-top: 10px">
	<tr>
		<td width="30%" style="padding: 5px;">Name</td>
		<td width="70%" style="padding: 5px;">{{ $details['name'] }}</td>
	</tr>
	<tr>
		<td width="30%" style="padding: 5px;">Email</td>
		<td width="70%" style="padding: 5px;">{{ $details['email'] }}</td>
	</tr>
	<tr>
		<td width="30%" style="padding: 5px;">Services Solution</td>
		<td width="70%" style="padding: 5px;">{{ $details['subject']}}</td>
	</tr>
    <tr>
		<td width="30%" style="padding: 5px;">Phone</td>
		<td width="70%" style="padding: 5px;">{{ $details['phone'] }}</td>
	</tr>
	<tr>
		<td width="30%" style="padding: 5px;">Message</td>
		<td width="70%" style="padding: 5px;">{{ $details['msg'] }}</td>
	</tr>
</table>

<br>
Thank You