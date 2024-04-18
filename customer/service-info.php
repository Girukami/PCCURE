<?php
    if(!isset($_GET['service_id'])){
        header('location: home.php');
    }

    include_once '../class/service.class.php';
    include_once '../class/appointment.class.php';
    $service = new Service;
    $service_id = $_GET['service_id'];

    if(!$service->getOne($service_id)){
        header('location: home.php?error_message=An error has been occured, please try again.');
    }
    
    $service_info = $service->getOne($service_id);
    $page_title = $service_info['name'];
    include_once '../includes/customer/header.php';
    include_once '../includes/customer/navbar.php';

    if(isset($_POST['confirm'])){
        if(!empty($_POST['address']) && !empty($_POST['contact_num']) && !empty($_POST['specreq'])){
            $address = htmlentities($_POST['address']);
            $contact_num = htmlentities($_POST['contact_num']);
            $specreq = htmlentities($_POST['specreq']);

            $appointment = new Appointment;
            if($appointment_id = $appointment->addAppointmentService($customer['customer_id'], $service_id, $address, $contact_num, $specreq)){
                header('location: home.php?success_message=Successfully set an appointment.');
            }

            $error_message = 'An error occured while setting an appointment.';
        }
        else{
            $error_message = 'Please fill up all fields.';
        }
    }
?>

<form class="product-info" method="post">
    <?php
        if(isset($error_message)){
    ?>
            <div class="popups error"><p><?php echo $error_message ?></p><img src="../images/icons/random/close.svg" class="close"></div>
            <script src="../script/popups.js"></script>

    <?php
            unset($error_message);
        }
    ?>

    <div class="img-cont">
        <img src="../images/uploads/services/<?php echo $service_info['image'] ?>">
    </div>

    <div class="right-side">
        <div class="info">
            <div>
                <p class="name">
                <?php echo $service_info['name'] ?>
                </p>
            </div>

            <div class="description">
                <div>
                    <span>Price: </span>
                    <p>₱<?php echo $service_info['price'] ?></p>
                </div>
            </div>

            <p class="desc-text"><?php echo $service_info['description'] ?></p>

            <div class="customer-info">
                <div>
                    <span>Address: </span>
                    <input type="text" name="address" value="<?php echo $customer['address'] ?>">
                </div>
                
                <div>
                    <span>Contact number: </span>
                    <input type="text" name="contact_num" class="contact_num" value="<?php echo $customer['contact_num'] ?>">
                </div>

                <div>
                    <span>Specify Request: </span>
    
                    <input type="text" name ="specreq" class="specreq" value="<?php echo $customer['specreq'] ?>">
                </div>

            </div>
        </div>

        <button type="button" class="action-button" id="set_btn">Set Appointment</button>
        
    </div>

    <div class="modal">
        <p>Confirm appointment?</p>

        <div class="buttons">
            <button type="button">Cancel</button>
            <input type="submit" name="confirm" value="Confirm">
        </div>
    </div>

    <span class="overlay"></span>
</form>

<script src="../script/set_appointment.js"></script>

<?php
    include_once '../includes/customer/footer.php';
?>