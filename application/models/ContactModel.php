<?php

class ContactModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function addData($data)
    {
        return $this->db->insert('contact_details', $data);
    }

    public function addBookingData($data)
    {
        return $this->db->insert('booking_details', $data);
    }

    public function visitData($data)
    {
        return $this->db->insert('user_details', $data);
    }

    public function subscribe($data)
    {
        return $this->db->insert('subscribe', $data);
    }

    public function getEmailContent($type, $data = [])
    {
        switch ($type) {
            case "booking":
                $msg = "<pre>Dear " . $data['name'] . ",

                We are thrilled to confirm your booking for the " . ucfirst($data['package']) . " adventure with [Your Company Name]. Get ready for an unforgettable journey filled with breathtaking landscapes, cultural discoveries, and new experiences.
                
                Booking Details:
                
                Traveler's Name: " . $data['name'] . "
                Travel Package: " . ucfirst($data['package']) . "
                
                What's Included:
                Accommodations
                Meals
                Guided Tours
                Transportation
                Excursions
                Travel Insurance (if applicable)

                What's Not Included:
                Personal Expenses
                Optional Activities
                Payment Information:
                
                Next Steps:
                
                Please review the booking details to ensure everything is accurate.
                Keep an eye on your inbox for any important updates and travel documents.
                If you have any questions or need assistance, don't hesitate to contact our dedicated customer support team at [Customer Support Email] or [Customer Support Phone Number].
                We recommend that you start preparing for your adventure by checking the weather, reviewing our packing tips, and ensuring your travel documents are up-to-date. If you haven't already, make sure to share any special dietary preferences or specific requirements with us.
                
                Thank you for choosing Indian Tour&Travels for your travel experience. We're excited to embark on this journey with you and create beautiful memories together.
                
                Safe travels and see you soon!
                
                Warm regards,
                
                Indian Tour&Travels
                indiantourandtravels@support.com
                www.indiantourandtravels.com <pre>";
                break;
            case "contact_us":
                $msg = "<pre>Dear " . $data['first_name'] . ",

                We hope this message finds you well. We wanted to take a moment to express our gratitude for reaching out to us through our contact form. Your inquiry is important to us, and we are committed to providing you with the best possible assistance.
                
                Here is a summary of the information you provided:
                
                Name: " . $data['first_name'] . "
                Email: " . $data['email'] . "
                Phone Number: " . $data['phone'] . "
                Message: " . $data['message'] . "

                We have received your message, and our team is already hard at work reviewing the details. We will get back to you as soon as possible, typically within 24-48 hours, with a personalized response addressing your specific inquiry.
                
                In the meantime, if you have any additional questions or if there's anything else we can assist you with, please don't hesitate to let us know. We are here to help.
                
                Thank you for considering [Your Company Name] as your trusted partner. We look forward to the opportunity to assist you further and provide you with the information you need.
                
                Warm regards,

                Indian Tour&Travels
                indiantourandtravels@support.com
                www.indiantourandtravels.com <pre>";                
                break;
            case "subscribe":
                $msg = "<pre>Thank you for subscribing to our newsletter! 🌟

                You're now part of our travel community, and we're excited to share our latest travel packages, exclusive offers, and inspiring travel stories with you. Get ready for a journey of discovery and adventure!
                
                Stay tuned for:
                
                🌴 Exciting travel destinations
                ✈️ Unmissable travel deals
                📸 Stunning travel photos
                🌐 Insider travel tips
                
                If you have any questions or special requests, feel free to reach out to our dedicated support team. Your travel dreams are our priority!
                
                Happy travels, and we look forward to sharing unforgettable experiences with you!<pre>";
                break;
            default:
                $msg = "Welcome to Indian Tour&Travels";
        }
        return $msg;
    }
}
