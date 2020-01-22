<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 *
 * Layout for AllSorters newsletter emailing service - credits to https://jsfiddle.net/vb1my3kt/
 *
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title ?></title>
</head>

<body bgcolor="#8d8e90">
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#8d8e90">
    <tr>
        <td><table width="600" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center">
                <tr>
                    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="61"><a href= "http://yourlink" target="_blank"><img src="images/PROMO-GREEN2_01_01.jpg" width="61" height="76" border="0" alt=""/></a></td>
                                <td width="144"><a href= "http://yourlink" target="_blank"><img src="images/PROMO-GREEN2_01_02.jpg" width="144" height="76" border="0" alt=""/></a></td>
                                <td width="393"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td height="46" align="right" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td width="67%" align="right"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#68696a; font-size:8px; text-transform:uppercase"><a href= "http://yourlink" style="color:#68696a; text-decoration:none"><strong>SEND TO A FRIEND</strong></a></font></td>
                                                        <td width="29%" align="right"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#68696a; font-size:8px"><a href= "http://yourlink" style="color:#68696a; text-decoration:none; text-transform:uppercase"><strong>VIEW AS A WEB PAGE</strong></a></font></td>
                                                        <td width="4%">&nbsp;</td>
                                                    </tr>
                                                </table></td>
                                        </tr>
                                    </table></td>
                            </tr>
                        </table></td>
                </tr>
                <tr>
                    <td align="center"></td>
                </tr>

                <tr>
                    <td align="center" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="100%" align="center" style="border-bottom:1px solid #000000; background-color: #1a3948" height="70" ><a href="http://localhost:8765/"><img alt="AllSorters" src="cid:allsorters-logo-id"></a></td>
                            </tr>
                        </table></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="5%">&nbsp;</td>
                                <td width="100%" align="center" valign="middle"><p style="font-family:Verdana, Geneva, sans-serif; color:#1a3948; font-size:22px; line-height:20px"><strong>To the Readers</strong></p></td>
                                <td width="5%">&nbsp;</td>

                            </tr>
                            <tr>
                                <td width="5%">&nbsp;</td>
                                <td width="90%" align="center" valign="middle" style="border: 2.5px solid #333; border-radius: 2.5px; padding-top:10px"><font style="font-family: Verdana, Geneva, sans-serif; color:#68696a; font-size:12px; line-height:20px; font-style: italic">"<?= $message ?>"</font><br />
                                    <p style="font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:20px"><a href= "#" style="color:#333333; text-decoration:none">From yours truly, &#xA; Mary Harnan</a></p></td>
                                <td width="5%">&nbsp;</td>
                            </tr>
                        </table></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td width="100%" align="center" valign="middle"><p style="font-family:Verdana, Geneva, sans-serif; color:#1a3948; font-size:22px; line-height:20px"><strong>Check out these posts!</strong></p></td>

                </tr>
                <tr>
                    <td><table width="600" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="18">&nbsp;</td>
                                <?php foreach ($blogs as $blog) { ?>
                                <td width="175" align="center" valign="top"><table width="175" border="0" cellspacing="0" cellpadding="0" style="background-color:#00adee; border-radius: 2.5px;">
                                        <tr>
                                            <td height="30" align="center" valign="middle" ><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#ffffff; font-size:20px;"><strong><?= $blog->title ?></strong></font></td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="middle" ><p style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#ffffff; font-size:14px"><strong><a href=<?="http://ie.infotech.monash.edu/team106/development/blogpost/view/$blog->blog_post_id"?> target="_blank" style="color:#ffffff; text-decoration:none">view details</a></strong></p></td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="middle">&nbsp;</td>
                                        </tr>
                                    </table></td>
                                <td width="19">&nbsp;</td>
                                <?php }; ?>
                            </tr>
                        </table></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><img src="images/PROMO-GREEN2_07.jpg" width="598" height="7" style="display:block" border="0" alt=""/></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="13%" align="center">&nbsp;</td>
                                <td width="14%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><a href= "http://yourlink" style="color:#010203; text-decoration:none"><strong>UNSUBSCRIBE </strong></a></font></td>
                                <td width="2%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><strong>|</strong></font></td>
                                <td width="9%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><a href= "http://yourlink" style="color:#010203; text-decoration:none"><strong>ABOUT </strong></a></font></td>
                                <td width="2%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><strong>|</strong></font></td>
                                <td width="10%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><a href= "http://yourlink" style="color:#010203; text-decoration:none"><strong>PRESS </strong></a></font></td>
                                <td width="2%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><strong>|</strong></font></td>
                                <td width="11%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><a href= "http://yourlink" style="color:#010203; text-decoration:none"><strong>CONTACT </strong></a></font></td>
                                <td width="2%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><strong>|</strong></font></td>
                                <td width="17%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><a href= "http://yourlink" style="color:#010203; text-decoration:none"><strong>STAY CONNECTED</strong></a></font></td>
                                <td width="5%">&nbsp;</td>
                            </tr>
                        </table></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#231f20; font-size:8px"><strong>Head Office &amp; Registered Office | Company name Ltd, Adress Line, Company Street, City, State, Zip Code | Tel: 123 555 555 | <a href= "http://yourlink" style="color:#010203; text-decoration:none">customercare@company.com</a></strong></font></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </table></td>
    </tr>
</table>
</body>
</html>


