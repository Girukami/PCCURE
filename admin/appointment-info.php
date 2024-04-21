<?php
    if(!isset($_GET['appointment_id'])){
        header('location: home.php');
    }

    $appointment_id = $_GET['appointment_id'];
    $page_title = 'appointment Info';
    include_once '../includes/admin/header.php';
    include_once '../includes/admin/navbar.php';
    include_once '../class/appointment.class.php';

    $appointment = new Appointment;

    if(!$appointment->getAppointmentInfo($customer['customer_id'], $appointment_id)){
        $error_message = 'An error has been occurred, please try again.';
    }

    if(isset($_POST['mark_approved'])){
        if($appointment->updateAppointmentStatus($appointment_id, 'approved')){
            header('location: appointment.php?success_message=Appointment approved.');
       }
    }
    else if(isset($_POST['mark_done'])){
        if($appointment->updateAppointmentStatus($appointment_id, 'done')){
            header('location: appointment.php?success_message=Successfully marked as done.');
       }
    }

    if(!$appointment->getAppointmentInfo($_SESSION['user_type'], $appointment_id)){
        header('location: home.php?error_message=An error has been occurred, please try again.');
    }

    $appointment_info = $appointment->getAppointmentInfo($customer['customer_id'], $appointment_id);
    $appointment_info = $appointment->getAppointmentInfo($_SESSION['user_type'], $appointment_id);
    $status = $appointment_info['status'];
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
                    <span>Appointment status: </span>

                    <p><?php echo ucwords($appointment_info['status']) ?></p>
                </div>
            </div>
        </div>

        <div class="payment">
            <div class="content">
                <div class="account">
                    <span>Client's Name: </span>
                    <p>
                        <?php echo $appointment_info['last_name'] ?>
                    </p>

                </div>
                <div>
                    <span>Address: </span>

                    <p><?php echo $appointment_info['address'] ?></p>
                </div>

                <div>
                    <span>Contact number: </span>

                    <p><?php echo $appointment_info['contact_num'] ?></p>
                </div>

                <div>
                    <span>Specific Request: </span>

                    <p><?php echo $appointment_info['specreq'] ?></p>
                </div>
                
                <div class="row">
                <span>Schedule: </span>

                    <?php
                    $set_date = $appointment_info['set_date'];
                    $formatted_date = date("F j, Y", strtotime($set_date));
                    ?>

                    <p><?php echo $formatted_date; ?></p>
                </div>
            </div>
        </div>

        <?php
        if($_SESSION['user_type'] === 'admin'){            
            if($status === 'pending'){
                echo '<input type="submit" class="action-button" value="Mark as Approved" name="mark_approved">';
            }
            else if($status === 'approved'){
                echo '<input type="submit" class="action-button" value="Mark as Done" name="mark_done">';
            }
        }
    ?>
    </div>
</form>

<?php
    include_once '../includes/admin/header.php';
?>