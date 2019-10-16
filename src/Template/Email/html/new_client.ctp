Dear admin,
you got a new client message:
<br>
<table style=" border: 1px solid black;">
    <tr style=" border: 1px solid black;">
        <td style=" border: 1px solid black;"> first name</td>
        <td style=" border: 1px solid black;"><?php echo $client->fname ?></td>
    </tr>
    <tr style=" border: 1px solid black;">
        <td style=" border: 1px solid black;">surname</td>
        <td style=" border: 1px solid black;"><?php echo $client->sname ?></td>
    </tr>
    <tr style=" border: 1px solid black;">
        <td style=" border: 1px solid black;">DOB</td>
        <td style=" border: 1px solid black;"><?php echo $client->DOB ?></td>
    </tr>
    <tr style=" border: 1px solid black;">
        <td style=" border: 1px solid black;">Address</td>
        <td style=" border: 1px solid black;"><?php echo $client->Address ?></td>
    </tr>
    <tr style=" border: 1px solid black;">
        <td style=" border: 1px solid black;">Phone</td>
        <td style=" border: 1px solid black;"><?php echo $client->Phone ?></td>
    </tr>
    <tr style=" border: 1px solid black;">
        <td style=" border: 1px solid black;">Email</td>
        <td style=" border: 1px solid black;"><?php echo $client->Email ?></td>
    </tr>
    <tr style=" border: 1px solid black;">
        <td style=" border: 1px solid black;">messages</td>
        <td style=" border: 1px solid black;"><?php echo $client->messages ?></td>
    </tr>


</table>