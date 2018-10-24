<?php
    //getting the dboperation class
    require_once '../includes/DBOperations.php';

    //function validating all the paramters are available
    //we will pass the required parameters to this function
    function isTheseParametersAvailable($params)
    {
        //assuming all parameters are available
        $available = true;
        $missingparams = "";

        foreach ($params as $param) {
            if (!isset($_POST[$param]) || strlen($_POST[$param])<=0) {
                $available = false;
                $missingparams = $missingparams . ", " . $param;
            }
        }

        //if parameters are missing
        if (!$available) {
            $response = array();
            $response['error'] = true;
            $response['message'] = 'Parameters ' . substr($missingparams, 1, strlen($missingparams)) . ' missing';

            //displaying error
            echo json_encode($response);

            //stopping further execution
            die();
        }
    }

    //an array to display response
    $response = array();

    //if it is an api call
    //that means a get parameter named api call is set in the URL
    //and with this parameter we are concluding that it is an api call
    if (isset($_GET['apicall'])) {
        switch ($_GET['apicall']) {





                      //the CREATE operation
                      //if the api call value is 'create new user'
                      //we will create a record in the database
                      //CREATE A NEW CLIENT

              case 'createowner':
                   $db = new DbOperation();
                  // json response array
                  $response = array("error" => false);

                  if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['phoneNumber'])){

                      // receiving the post params
                      $agro_vet_name = $_POST['agro_vet_name'];
                      $agro_vet_reg_num = $_POST['agro_vet_reg_num'];
                      $username = $_POST['username'];
                      $usertype = $_POST['usertype'];
                      $password = $_POST['password'];
                      $email = $_POST['email'];
                      $phoneNumber = $_POST['phoneNumber'];



                      // check if user is already existed with the same email
                      if ($db->doesUserExist($email)) {
                          // user already existed
                          $response["error"] = true;
                          $response["error_msg"] = "User already exists with " . $email;
                          echo json_encode($response);
                      } else {
                          // create a new user
                          $user = $db->createUser($agro_vet_name, $agro_vet_reg_num, $username, $usertype, $password, $email, $phoneNumber);
                          if ($user) {
                              // user stored successfully
                              $response["error"] = false;
                              $response["uid"] = $user["unique_id"];
                              $response["user"]["agro_vet_name"] = $user["agro_vet_name"];
                              $response["user"]["agro_vet_reg_num"] = $user["agro_vet_reg_num"];
                              $response["user"]["username"] = $user["username"];
                              $response["user"]["usertype"] = $user["usertype"];
                              $response["user"]["encrypted_password"] = $user["encrypted_password"];
                              $response["user"]["email"] = $user["email"];
                              $response["user"]["phoneNumber"] = $user["phoneNumber"];
                              $response["user"]["created_at"] = $user["created_at"];
                              $response["user"]["updated_at"] = $user["updated_at"];

                          } else {
                              // user failed to store
                              $response["error"] = true;
                              $response["error_msg"] = "Unknown error occurred in registration!";
                              echo json_encode($response);
                          }
                      }
                  } else {
                      $response["error"] = true;
                      $response["error_msg"] = "Required parameters (username, email or password) is missing!";
                      echo json_encode($response);
                  }
                    break;

                      //the delete operation
                case 'deleteuseraccount':
                $db = new DbOperation();

                  //for the delete operation we are getting a GET parameter from the url having the id of the record to be deleted
                  if (isset($_GET['user_id'])) {
                      if ($db->deleteUserAccount($_GET['user_id'])) {
                          $response['error'] = false;
                          $response['message'] = 'user accoount deleted successfully';
                          $response['users'] = $db->getUserDetails();
                      } else {
                          $response['error'] =
                          true;
                          $response['message'] = 'Some error occurred please try again';
                      }
                  } else {
                      $response['error'] = true;
                      $response['message'] = 'Nothing to delete, provide an id please';
                  }
                   break;

        }
            } else {
                //if it is not api call
                //pushing appropriate values to response array
                $response['error'] = true;
                $response['message'] = 'Invalid API Call';
            }

        //displaying the response in json structure
        echo json_encode($response);
