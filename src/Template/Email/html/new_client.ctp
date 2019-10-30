Dear admin,
you got a new client message:
<br>
<table style=" border: 1px solid black;">
    <tr style=" border: 1px solid black;">
        <td style=" border: 1px solid black;"> first name</td>
        <td style=" border: 1px solid black;"><?php echo $request->Cust_Fname ?></td>
    </tr>
    <tr style=" border: 1px solid black;">
        <td style=" border: 1px solid black;">surname</td>
        <td style=" border: 1px solid black;"><?php echo $request->Cust_Sname ?></td>
    </tr>
    <tr style=" border: 1px solid black;">
        <td style=" border: 1px solid black;">Phone</td>
        <td style=" border: 1px solid black;"><?php echo $request->Phone ?></td>
    </tr>
    <tr style=" border: 1px solid black;">
        <td style=" border: 1px solid black;">Message</td>
        <td style=" border: 1px solid black;"><?php echo $request->Query_info ?></td>
    </tr>
</table>
