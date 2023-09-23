<?php
class Auth_model extends CI_Model
{
    public function update_otp($user_id, $otp_code, $otp_expiry)
    {
        $this->db->where('email', $user_id);
        $this->db->update('user', [
            'otp_code' => $otp_code,
            'otp_expiry' => $otp_expiry
        ]);
    }
}
