<?php
namespace veles\Utilities\PhoneAuth;


use Leeto\PhoneAuth\SmsServiceInterface;

class SevenTechSms implements SmsServiceInterface
{
    protected $host = "https://api.seven.tech/send";


    protected $settings = [];

    public function settings(array $settings): void
    {
        $this -> settings = $settings;
    }

    public function send(string $phone, string $message): bool
    {
        $response = Http::get($this->host, [
            "serviceId" => $this->settings["serviceID"],
            "pass" => $this->settings["pass"],
            "clientId" => $phone,
            "source" => $this->settings["source"],
            "message" => $message,

        ]);
        return preg_match("/OK/", $response);
    }
}
