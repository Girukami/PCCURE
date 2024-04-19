<?php
    if(!isset($_GET['appointment_id'])){
        header('location: home.php');
    }

    $appointment_id = $_GET['appointment_id'];
    $page_title = 'appointment Info';
    include_once '../includes/customer/header.php';
    include_once '../includes/customer/navbar.php';
    include_once '../class/appointment.class.php';

    $appointment = new Appointment;

    if(!$appointment->getAppointmentInfo($customer['customer_id'], $appointment_id)){
        $error_message = 'An error has been occurred, please try again.';
    }

    if(isset($_POST['mark_claimed'])){
        if($appointment->markclaimed($appointment_id)){
            header('location: home.php?success_message=Appointment successfully marked as claimed.');
        }
        else{
            $error_message = 'Something went wrong, please try again.';
        }
    }

    if(isset($error_message)){
        header('location: home.php?error_message=' . $error_message);
    }

    $appointment_info = $appointment->getAppointmentInfo($customer['customer_id'], $appointment_id);
?>

<form method="post" class="order-info">
    <div class="img-cont">
        <img src="../images/uploads/services/<?php echo $appointment_info['image'] ?>">
    </div>

    <div class="right-side">
        <div class="info">
            <div class="row">
                <div>
                    <p class="name"><?php echo $appointment_info['name'] ?></p>
                </div>

                <div>
                    <span>Cost: ₱</span>

                    <p><?php echo $appointment_info['price'] ?></p>
                </div>
            </div>

            <div class="row">
                <div>
                    <span>Appointment ID: </span>

                    <p><?php echo $appointment_id ?></p>
                </div>

                <div>
                    <span>Appointment Status: </span>

                    <p><?php echo ucwords($appointment_info['status']) ?></p>
                </div>
            </div>
        </div>

        <div class="payment">
            <div class="content">
                <div>
                    <span>Your Address: </span>

                    <p><?php echo $appointment_info['address'] ?></p>
                </div>

                <div>
                    <span>Contact number: </span>

                    <p><?php echo $appointment_info['contact_num'] ?></p>
                </div>

                <div>
                    <span>Payment Method: </span>

                    <p>Cash</p>
                </div>

                <div>
                    <span>Specific Request: </span>

                    <p><?php echo $appointment_info['specreq'] ?></p>
                </div>
            </div>
        </div>

        <?php
            if($appointment_info['status'] === 'delivered'){
                echo '<input type="submit" class="action-button" value="Mark as Claimed" name="mark_claimed">';
            }
        ?>
    </div>
</form>

<?php
    include_once '../includes/customer/header.php';
?>