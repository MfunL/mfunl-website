<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Seo;

final class HomeController extends Controller
{
    public function index(array $routeMeta): string
    {
        $seo = new Seo(
            title: $routeMeta['title'],
            description: $routeMeta['description'],
            path: '/'
        );

        return $this->view('home/index', [
            'seo' => $seo,
            'bodyClass' => 'page-home',
            'faqs' => $this->faqs(),
        ]);
    }

    /**
     * @return array<int,array{question:string,answer:string}>
     */
    private function faqs(): array
    {
        return [
            ['question' => 'What are MfunL\'s working hours?', 'answer' => 'MfunL is open Monday to Friday, 10:00 am to 7:00 pm. You can book a call or visit the Kolkata office during those hours.'],
            ['question' => 'What is the best way to reach MfunL?', 'answer' => 'Call +91 8336920676, email info@mfunl.com, or visit the office at P-534, Raja Basanta Roy Road, 3rd Floor, near Southern Avenue Lake Kali Bari, Kolkata.'],
            ['question' => 'How does a hospital or clinic start working with MfunL?', 'answer' => 'Reach out by phone, the contact form on this site, or in person. From there MfunL reviews your goals and puts together a proposal tailored to your practice.'],
            ['question' => 'How soon will I see results?', 'answer' => 'Most practices notice early movement in visibility and lead volume within 3-4 months of onboarding, with ROI and brand growth building from there.'],
            ['question' => 'What budget should I plan for?', 'answer' => 'Budget depends on your goals and campaign scale. As a guide, a minimum of roughly Rs. 1,70,000 is recommended for a digital marketing program that can perform.'],
            ['question' => 'Does MfunL help convert leads into patients, not just generate them?', 'answer' => 'Yes — beyond delivering leads, MfunL trains your front-desk and patient-care staff so more of those enquiries turn into booked appointments.'],
            ['question' => 'How does MfunL help my team manage incoming leads?', 'answer' => 'Through structured lead-tracking processes and staff training, so your team can follow up, nurture and close enquiries consistently.'],
            ['question' => 'How are meetings scheduled?', 'answer' => 'Whichever works for you — in person at the Kolkata office, by phone, or over a video call — with regular check-ins to keep strategy on track.'],
            ['question' => 'How long from onboarding to campaigns going live?', 'answer' => 'Typically 8-10 days, which covers research, content planning and account setup before anything launches.'],
            ['question' => 'Is there a minimum contract length?', 'answer' => 'MfunL recommends a minimum nine-month engagement, since that\'s roughly how long a strategy needs to mature and show meaningful results.'],
            ['question' => 'What happens if I want to end the engagement?', 'answer' => 'Notice periods and the offboarding process are laid out in the service agreement, and MfunL works with you for a clean, transparent handover.'],
            ['question' => 'What are the payment terms?', 'answer' => 'Payment terms are structured but flexible and set out clearly in the agreement before work begins.'],
        ];
    }
}
