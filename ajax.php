<?php

// If request response (echo) starts with " / "
// its a redirect for specific page in ajax

// ob_start();
// session_start();
// define('ROOT_DIR', dirname(__FILE__));
// spl_autoload_register(function ($class_name) {
//   $class_name = strtolower($class_name);
//   require(ROOT_DIR.'/inc/class.'. $class_name .'.php');
// });
// $user = new USER();
// $category = new CATEGORY();
// $post = new POST();

// if (isset($_POST['form'])) {
//   switch ($_POST['form']) {

//     case 'logowanie':
//       if (isset($_POST['email']) && isset($_POST['password'])) {
//         $email = $_POST['email'];
//         $password = $_POST['password'];

//         $USER_TOKEN = $user->loginUser($email, $password);

//         if ($USER_TOKEN != false) {
//           $details = $user->getUserDetails($USER_TOKEN);
//           if ($details != false) {
//             $contract = $user->getActiveContract($details);
//             if ($contract != false) {
//               $u_id = $details->elements[0]->id;
//               $club_id = $details->elements[0]->homeClubId;

//               if (empty($club_id)) {
//                 http_response_code(400);
//                 echo 'Nie ma klubu!';
//               }

//               if ($department = $user->getUserClub($USER_TOKEN, $club_id)) {
//                 //
//               } else {
//                 $department = $club_id;
//               }

//               if ($user_id = $user->dbUserExists($email)) {
//                 $user->dbUpdateUser($email);
//                 $_SESSION['indb'] = true;
//                 $_SESSION['email'] = $email;
//                 $_SESSION['date'] = date("Y-m-d");
//                 $_SESSION['id'] = $user_id;
//                 http_response_code(200);
//                 echo '/dashboard';
//               } else {
//                 $user_id = $user->dbAddUser($u_id, $email, $department);
//                 $_SESSION['indb'] = true;
//                 $_SESSION['email'] = $email;
//                 $_SESSION['date'] = date("Y-m-d");
//                 $_SESSION['id'] = $user_id;
//                 http_response_code(200);
//                 echo '/dashboard';
//               }

//             } else {
//               http_response_code(400);
//               echo 'Nie masz aktywnego karnetu!';
//             }
//           } else {
//             http_response_code(400);
//             echo 'Błąd pobierania danych. Spróbuj ponownie później.';
//           }
//         } else {
//           http_response_code(400);
//           echo 'Niepoprawne dane logowania.';
//         }
//       }
//       break;

//     case 'kontakt':
//       if (isset($_POST['imie']) && isset($_POST['email']) && isset($_POST['box']) && isset($_POST['message'])) {
//         $name = $_POST['imie'];
//         $email = $_POST['email'];
//         if (isset($_POST['box'])) {
//           $zgoda = $_POST['box'];
//         }
//         $msg = $_POST['message'];

//         $recipient = "kontakt@pl.fitnessworld.com";
//         $subject = "MyFW - Zapytanie z formularza kontaktowego";
//         $email_content = "";

//         if (isset($name)) {
//           $email_content .= "<b>Imię:</b> $name\n";
//         }
//         if (isset($email)) {
//           $email_content .= "<b>Email:</b> $email\n";
//         }
//         if (isset($zgoda)) {
//           $email_content .= "<b>Zgoda:</b> Tak\n";
//         } else {
//           $email_content .= "<b>Zgoda:</b> Nie\n";
//         }
//         if (isset($msg)) {
//           $email_content .= $msg;
//         }
//         $email_content = nl2br($email_content);
//         $header = "Content-type: text/html; charset=utf-8";

//         if (mail($recipient, $subject, $email_content, $header)) {
//           http_response_code(200);
//           echo 'Dziękujemy. Wkrótce się z Tobą skontaktujemy.';
//         } else {
//           http_response_code(500);
//           echo 'Błąd! Wiadomość nie mogła zostać wysłana.';
//         }
//       }
//       break;

//     case 'dietetyk':
//       if (isset($_POST['imie']) && isset($_POST['email']) && isset($_POST['box']) && isset($_POST['message'])) {
//         $name = $_POST['imie'];
//         $email = $_POST['email'];
//         if (isset($_POST['box'])) {
//           $zgoda = $_POST['box'];
//         }
//         if (isset($_POST['box2'])) {
//           $zgoda2 = $_POST['box2'];
//         }
//         $msg = $_POST['message'];

//         $recipient = "racze@pl.fitnessworld.com";
//         $subject = "MyFW - Zapytanie do dietetyka";
//         $email_content = "";

//         if (isset($name)) {
//           $email_content .= "<b>Imię:</b> $name\n";
//         }
//         if (isset($email)) {
//           $email_content .= "<b>Email:</b> $email\n";
//         }
//         if (isset($zgoda)) {
//           $email_content .= "<b>Zgoda:</b> Tak\n";
//         } else {
//           $email_content .= "<b>Zgoda:</b> Nie\n";
//         }
//         if (isset($zgoda2)) {
//           $email_content .= "<b>Zgoda dietetyk:</b> Tak\n";
//         } else {
//           $email_content .= "<b>Zgoda dietetyk:</b> Nie\n";
//         }
//         if (isset($msg)) {
//           $email_content .= $msg;
//         }
//         $email_content = nl2br($email_content);
//         $header = "Content-type: text/html; charset=utf-8";

//         if (mail($recipient, $subject, $email_content, $header)) {
//           http_response_code(200);
//           echo 'Dziękujemy. Nasz dietetyk wkrótce się z Tobą skontaktuje.';
//         } else {
//           http_response_code(500);
//           echo 'Błąd! Wiadomość nie mogła zostać wysłana.';
//         }
//       }
//       break;

//       case 'przypomnienie':
//         if (isset($_POST['email'])) {
//           $email = $_POST['email'];
//           $ROOT_TOKEN = $user->generateRootToken();
//           $RESET_TOKEN = $user->getResetToken($email, $ROOT_TOKEN);

//           if ($RESET_TOKEN != false) {
//             http_response_code(200);
//             echo '/przypomnienie-hasla?token='.$RESET_TOKEN;
//           } else {
//             http_response_code(400);
//             echo 'Nie udało się wygenerować tokenu.';
//           }
//         }
//         break;

//         case 'nowehaslo':
//           if (isset($_POST['password'])) {
//             $pass = $_POST['password'];
//             $token = $_POST['token'];
//             $ROOT_TOKEN = $user->generateRootToken();
//             $newpass = $user->setNewPassword($token, $pass, $ROOT_TOKEN);
//             if (isset($newpass)) {
//               if ($newpass > 0) {
//                 http_response_code(200);
//                 echo 'Pomyślnie ustawiono nowe hasło!';
//               } else {
//                 http_response_code(400);
//                 echo 'Nie udało się ustawić nowego hasła.';
//               }
//             }
//           }
//           break;

//         case 'admin-category-add':
//           $name = $_POST['name'];
//           $slug = $_POST['slug'];
//           $description = $_POST['description'];

//           if ($newcat = $category->addCategory($name, $slug, $description)) {
//             http_response_code(200);
//             echo '/admin?page=kategorie';
//           } else {
//             http_response_code(400);
//             echo 'Nie udało się dodać kategorii.';
//           }
//         break;

//         case 'admin-category-edit':
//           $id = $_POST['category_id'];
//           $name = $_POST['name'];
//           $slug = $_POST['slug'];
//           $description = $_POST['description'];

//           if ($newcat = $category->updateCategory($name, $slug, $description, $id)) {
//             http_response_code(200);
//             echo '/admin?page=kategorie';
//           } else {
//             http_response_code(400);
//             echo 'Nie udało się zmodyfikować kategorii.';
//           }
//         break;

//         case 'admin-post-add':
//           $title = $_POST['title'];
//           $slug = $_POST['slug'];
//           $image = $_POST['image'];
//           if (isset($_POST['categories'])) {
//             $categories = $_POST['categories'];
//           } else {
//             $categories = array();
//           }
//           $content = $_POST['content'];
//           $status = $_POST['status'];
//           $author_id = $_SESSION['id'];

//           if ($newpost = $post->addPost($title, $slug, $image, $categories, $content, $status, $author_id)) {
//             http_response_code(200);
//             echo '/admin?page=wpisy';
//           } else {
//             http_response_code(400);
//             echo 'Nie udało się dodać wpisu.';
//           }
//         break;

//         case 'admin-post-edit':
//           $title = $_POST['title'];
//           $slug = $_POST['slug'];
//           $image = $_POST['image'];
//           if (isset($_POST['categories'])) {
//             $categories = $_POST['categories'];
//           } else {
//             $categories = array();
//           }
//           $content = $_POST['content'];
//           $status = $_POST['status'];
//           $id = $_POST['post_id'];

//           if ($newpost = $post->updatePost($title, $slug, $image, $categories, $content, $status, $id)) {
//             http_response_code(200);
//             echo '/admin?page=wpisy';
//           } else {
//             http_response_code(400);
//             echo 'Nie udało się zmodyfikować wpisu.';
//           }
//         break;

//         case 'admin-post-delete':
//           $id = $_POST['id'];

//           if ($post->deletePost($id)) {
//             http_response_code(200);
//             echo '/admin?page=wpisy';
//           } else {
//             http_response_code(400);
//             echo 'Nie udało się usunąć wpisu.';
//           }
//         break;

//         case 'admin-category-delete':
//           $id = $_POST['id'];

//           if ($category->deleteCategory($id)) {
//             http_response_code(200);
//             echo '/admin?page=kategorie';
//           } else {
//             http_response_code(400);
//             echo 'Nie udało się usunąć kategorii.';
//           }
//         break;

//     default:

//       break;
//   }
// }
?>
