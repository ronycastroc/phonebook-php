<?php 

  session_start();
  
  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;  

  if(!empty($data)) {
    //POST
    if($data["type"] === "create") {

      $name = $data["name"];
      $phone = $data["phone"];
      $observations = $data["observations"];

      $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":name", $name);
      $stmt->bindParam(":phone", $phone);
      $stmt->bindParam(":observations", $observations);
    }

    try {

      $stmt->execute();
      $_SESSION["msg"] = "Contact created successfully";
  
    } catch(PDOException $e) {
      $error = $e->getMessage();
      echo "Erro: $error";
    }

    // REDIRECT HOME
    header("Location:" . $BASE_URL . "/../index.php");

  } else {
    //GET
    $id;

    if(!empty($_GET)) {
      $id = $_GET["id"];
    }
  
  
    if(!empty($id)) {
      // GET ONE CONTACT  
      $query = "SELECT * FROM contacts WHERE id = :id";
  
      $stmt = $conn->prepare($query);
  
      $stmt->bindParam(":id", $id);
  
      $stmt->execute();
  
      $contact = $stmt->fetch();
  
    } else {
      // GET ALL CONTACTS
      $contacts = [];
  
      $query = "SELECT * FROM contacts";
  
      $stmt = $conn->prepare($query);
  
      $stmt->execute();
  
      $contacts = $stmt->fetchAll();
  
    }
  }

  // CLOSE CONNECTION
  $conn = null;