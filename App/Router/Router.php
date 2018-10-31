<?php


$Pagename=null;
$PageCode=null;
if (isset($_GET['pc'])) {

  $Pagename=$_GET['pn'];
  $PageCode=$_GET['pc'];

  switch ($PageCode) {


    case 'AccountHome':
      include 'App/Includes/Accounts/AccountsHome.php';
      break;
      case 'Ca':
        include 'App/Includes/Accounts/CustomersAccounts.php';
        break;
        case 'Ea':
          include 'App/Includes/Accounts/EmployesAccounts.php';
          break;
          case 'Oa':
            include 'App/Includes/Accounts/OfficeAccounts.php';
            break;
            case 'SoA':
            include 'App/Includes/Accounts/SingleOfficeAccounts.php';
            break;
            case 'Rp':
            include 'App/Includes/RP.php';
            break;

            case 'Services':
              include 'App/Includes/Settings/Services.php';
              break;


    default:
        include 'App/Includes/Accounts/AccountsHome.php';
      break;




  }
}elseif(!isset($_GET['pc'])) {


  include 'App/Includes/Accounts/AccountsHome.php';
}


 ?>
