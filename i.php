<?php
    $caption  = htmlspecialchars(strip_tags($_POST["caption"]));
    $name = htmlspecialchars(strip_tags($_POST["name"]));
    $mail = htmlspecialchars(strip_tags($_POST["mail"]));
    $phone = htmlspecialchars(strip_tags($_POST["phone"]));
    mail('whos@mail.yo',
           $caption,
              "<html>
                  <head>
                      <title>Сообщение: </title>
                  </head>
                  <body>
                      <table>
                          <tr>
                              <td></td>
                              <td>
                              ".$caption."
                              </td>
                          </tr>
                          <tr>
                              <td>Имя:</td>
                              <td>
                              ".$name."
                              </td>
                          </tr>
                          <tr>
                              <td>Контакты:</td>
                              <td>
                              ".$mail."
                              </td>
                              <td>
                              ".$phone."
                              </td>
                          </tr>
                      </table>
                  </body>
              </html>",
              "Content-type: text/html; charset=utf-8\r\nFrom: tratata@mail.yo\r\n");
  //*/?>