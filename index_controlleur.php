    <?php
    session_start();
    ob_start();
    require_once 'connexion.php'; 
    require_once 'season_model.php'; 
    require_once 'requests_model.php';
    $conn = getConnection();

    $error = "";
    $color = "red";


        if (!isset($_SESSION['login'])) {
            $error = "You need to be logged in, please!";
            echo "<script>console.log('$error');</script>";
            echo "<script>alert('You need to be logged in, please!');</script>";


            
        }

        $requestsModel = new RequestsModel($conn);

        
            
            if(isset($_POST['request'])){

                
                $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $roomType = $_POST['room_type'];
                $checkInDate = new DateTime($_POST['checkInDate']);


                        $checkOutDate = new DateTime($_POST['checkOutDate']);   
                        if($checkInDate>$checkOutDate)  {
                            echo "<script>alert('date invalide ,il faut checkOutDate more than checkInDate ');</script>"; 

                        }

                        $checkInDateString = $checkInDate->format('Y-m-d');
                        $checkOutDateString = $checkOutDate->format('Y-m-d');
                        //echo "<script>alert('ybda fi " . $checkInDateString . "');</script>"; 
                       // echo "<script>alert('youfa fi " . $checkOutDateString . "');</script>"; 
                        


    $numberOfNights = $checkInDate->diff($checkOutDate)->days;
    echo "<script>alert('el numberofnights howa $numberOfNights');</script>";




                $seasonModel = new SeasonModel($conn);
                $seasonLabel = $seasonModel->getCurrentSeasonLabel(new DateTime($_POST['checkInDate']), $conn);
                //echo "<script>alert('Le nom du saison dans la date que tu as choisie est : $seasonLabel');</script>";


                $seasonPrice = $seasonModel->getPriceByLabel($seasonLabel, $conn);
                //echo "<script>alert('Le prix de saison est : $seasonPrice');</script>";

    switch ($roomType) {
        case 'Celebrety Room':
            $roomPrice = 600; 
            break;
        case 'Deluxe Room':
            $roomPrice = 500; 
            break;
        case 'AC Super Room':
            $roomPrice = 400; 
            break;
            case 'AC Normal Room':
                $roomPrice = 300; 
                break;
            case 'Normal Room':
                    $roomPrice = 200; 
                    break;


        default:
            $roomPrice = 0;

    }
   // echo "<script>alert(' roomPrice howa $roomPrice');</script>";


    $totalPrice_without_saison = ( $roomPrice) * $numberOfNights;

    $totalPrice = ($seasonPrice + $roomPrice) * $numberOfNights;
    //echo "<script>alert(' totalPrice blach 7sban el saison howa $totalPrice_without_saison');</script>";

    //echo "<script>alert(' totalPrice howa $totalPrice');</script>";



                        if($checkInDate<$checkOutDate)  {

                        $stmt = $conn->prepare("INSERT INTO `requests`(`name`, `email`, `phone`, `room_name`, `message`, `checkInDate`, `checkOutDate`, `price`) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                        if ($stmt->execute([$name, $email, $phone, $roomType, $message, $checkInDateString, $checkOutDateString, $totalPrice])) {
                            $error = "We've got your request";
                            echo "<script>alert('We've got your request');</script>";
                         } else {
                            $error = "Error occurred";
                            echo "<script>alert('Error occurred');</script>";
                         }

                        }else{
                            echo "<script>alert('car la date n est pas correct ,pas de reservation !');</script>";

                        }


   

            }elseif(isset($_POST['Devis'])) {

               
                header("Location: Devis_view.php");
            }
        
        


    include 'index_view.php';

    ?>
