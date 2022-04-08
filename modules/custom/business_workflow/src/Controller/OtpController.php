<?php

namespace Drupal\business_workflow\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use GuzzleHttp\Client as GuzzleClient;

/**
 * Class OtpController.
 */
class OtpController extends ControllerBase
{

  /**
   * Otp.
   *
   * @return string
   *   Return Hello string.
   */
  public function otpGenerate()
  {
    $data = $name = \Drupal::request()->request->all();
    $otpMobile = $this->generateNumericOTP(4);
    $otpMail = $this->generateNumericOTP(4);
    // $sms = $this->smsapi($data['mobile']);
    // $_SESSION['otp-data'] = [
    //   'mobile' => $data['mobile'],
    //   'mail' => $data['mail'],
    //   'otpMobile' => $otpMobile,
    //   'otpMail' => $otpMail,
    //   'sms' => $sms,
    // ];
    $_SESSION['otp-data'] = [
      'mobile' => $data['mobile'],
      'mail' => $data['mail'],
      'otpMobile' => $otpMobile,
      'otpMail' => $otpMail,
    ];
    return new JsonResponse($_SESSION['otp-data'], 200);
  }

  // public function smsapi($number)
  // {
  //   $headers = array(
  //     'X-Client-ID' => '69b12b2872021d2488c598d2388ace2e',
  //     'X-CLIENT-SECRET' => 'fcbd7e53428d318af45fbfc1d6f1837c',
  //     'Content-Type' => 'application/json',
  //     'Cookie' => 'TS01eb50c3=019409637e74cdfc9a0e76ff35ca5c87255e745c1b78f8187d02ce4f421ffc5799688d1827f70b5928e3e8a3704cc0376337444d5d; TS01af21b1=019409637e5fbc421b3f259aadf9ca8e8dcd48866186fedc05c6e0c755655ad5f451262c10966594af795846da06940b4c1b0ef7ef'
  //   );
  //   try {
  //     $client = new GuzzleClient();
  //     $response = $client->request('POST', 'https://api-gw.jazzcash.com.pk/jazzcash/third-party-integration/rest/api/v1/notification/sms', [
  //       'headers' => $headers,
  //       'form_params' => [
  //         "msisdn" => $number,
  //         "customerType" => "consumer",
  //         "template" => "SINGLE_PARAMETER",
  //         "data" => [
  //           [
  //             "key" => "smsBody",
  //             "value" => "its single param sms\ntesting\ntesting"
  //           ]
  //         ]
  //       ],
  //     ]);
  //     \Drupal::logger('business_workflow')->notice($response->getBody()->getContents());
  //     $response = json_decode($response->getBody()->getContents());
  //     return $response;
  //   } catch (\Exception $e) {
  //     //log error to drupal
  //     \Drupal::logger('business_workflow')->error($e->getMessage());
  //     return false;
  //   }
  // }

  public function otpVerify()
  {
    $data = \Drupal::request()->request->all();
    if (!isset($_SESSION['otp-data'])) {
      return new JsonResponse(["msg" => "Otp not generated"], 403);
    }
    $mobile = $data['mobile'];
    $mail = $data['mail'];
    $otpMobile = $data['otpMobile'];
    $otpMail = $data['otpMail'];

    $otpMobileCheck = $otpMobile === $_SESSION['otp-data']['otpMobile'];
    $otpMailCheck = $otpMail === $_SESSION['otp-data']['otpMail'];
    $mobileCheck = $mobile === $_SESSION['otp-data']['mobile'];
    $mailCheck = $mail === $_SESSION['otp-data']['mail'];

    if (
      $otpMobileCheck  &&
      $otpMailCheck  &&
      $mobileCheck  &&
      $mailCheck
    ) {
      return new JsonResponse($_SESSION['otp-data'], 200);
    } else {
      return new JsonResponse([
        "msg" => "Verification failed",
        "fields" => [
          'otpMobileCheck' => $otpMobileCheck,
          'otpMailCheck' => $otpMailCheck,
          'mobileCheck' => $mobileCheck,
          'mailCheck' => $mailCheck
        ],
        "session" => $_SESSION['otp-data'],
        "data" => [
          $mobile, $mail, $otpMobile, $otpMail
        ]
      ], 403);
    }
  }
  // Function to generate OTP
  public function generateNumericOTP($n)
  {
    $generator = "1357902468";
    $result = "";
    for ($i = 1; $i <= $n; $i++) {
      $result .= substr($generator, (rand() % (strlen($generator))), 1);
    }
    // Return result
    return $result;
  }
}
