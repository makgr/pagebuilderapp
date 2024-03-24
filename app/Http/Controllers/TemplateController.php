<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class TemplateController extends Controller
{

    public function templateList()
    {
        $templates = DB::table('templates')->get();
        return view('template_list', compact('templates'));
    }
    public function buildTemplate($id)
    {
        $template_id = $id;
        return view('build', compact('template_id'));
    }
    public function addTemplate()
    {
        return view('add_template');
    }
    public function saveTemplate(Request $request)
    {
        $name = $request->name;
        DB::table('templates')->insert([
            'name' => $name
        ]);

        return redirect('/')->with('msg-success', 'Template created successfully.');
    }

    public function saveDesign(Request $request)
    {
        $productId = $request->input('product_id');
        // $design = $request->input('design');
        $html = $request->input('html');
        $css = $request->input('css');

        // echo $html;
        // die();

        DB::table('templates')->where('id', $productId)->update(['design' => $html, 'css_code' => $css]);

        return response()->json(['success' => true]);
    }

    public function getDesign(Request $request)
    {
        $productId = $request->input('product_id');
        // $design = DB::table('templates')->where('id', $productId)->value('design');

        $design = [
            'html' => DB::table('templates')->where('id', $productId)->value('design'),
            'css' => DB::table('templates')->where('id', $productId)->value('css_code'),
        ];

        return response()->json(['design' => $design]);
    }

    public function sendTestMail(Request $request)
    {
        $to = $request->email;
        $subject = $request->subject;
        $template_id = $request->template_id;

        $html = DB::table('templates')->where('id', $template_id)->value('design');
        $css = DB::table('templates')->where('id', $template_id)->value('css_code');

        $details = [
            'subject' => $subject,
            'to' => $to,
            'html' => $html,
            'css_code' => $css
            // 'body' => $body
        ];

        try {
            Mail::send('emails.mail', $details, function ($message) use ($details) {
                $message->to($details["to"])
                    ->from('info@r3marketing.com', 'R3 Marketing')
                    // ->cc(['enayet@nochallenge.net', 'zahid@nochallenge.net'])
                    ->subject($details["subject"]);
            });

            return response()->json(['message' => 'Test email sent successfully!', 'recipient' => $to]);
        } catch (\Exception $e) {
            Log::info('send mail exception: ' . $e->getMessage());
            return response()->json(['message' => 'Test email not sent!', 'recipient' => $to]);
        }
    }
}
