<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Checklist extends Component
{
    public $flash = '';
    public $question = '';
    public $tasks = [
        'setup_the_system'=>[
            'title_note' => 'Most of this section is stuff that you won\'t readily be able to see,
            for example programming this checklist and the ability to ask questions here. However,
            it\'s all very helpful in moving this forward in the easiest way possible to solve problems
            in the easiest ways we can think of.',
            'create_visual_checklist_format' => 1,
            'create_version_repository'=>1,
            'create_version_repository_note'=> 'This basically will show all versions of the project, it\'s a <em>DR</em>
            (Disaster recovery) mechanism, in case I kick the bucket, another person can take over with a list of everything
            that\'s ever been done and things that need to get done in order to move forward. I will also endeavour to
            find someone to take over for me in case that should occur.',
            'kick_bucket_replacement_volunteer_found' => 0,
            'put_up_temporary_site'=>1,
            'put_up_temporary_site_note'=>'you are on it, the data on here will constantly be destroyed and re-written
            as we get ready to make something real! As real as this feels, don\'t save anything here that is important.
            Instead email me or keep a word doc, or basically anything else other than saving real data here.',
        ],
        'PAC USE CASES (A CHECK MEANS IT\'S AGREED UPON)' => [
            'Gatekeeper authorizes guardians who register'=>1,
            'Gatekeeper authorizes guardians who register_note'=> 'The <b>"Gatekeeper"</b> is a PAC member who has access
             to information and knows which families are attending the school and which ones are not.<br><br>
             Anyone who registers need to go through a 2 step process to have access to <b><em>any</em></b> information.
             Step 1 is simply verifying their email address which they can do without any intervention from the gatekeeper.
             Step 2 requires a person to actually allow the verified guardian access to see our internal information.
             Step 2 will also need to be re-done every year.',
            'Gatekeeper is notified each time someone registers'=>1,
            'Gatekeeper is notified each time a child is registered'=>1,
            'Gatekeeper confirms child details including homeroom'=>1,
            'Gatekeeper confirms child details including homeroom_note'=> '
            This seems overwhelming for 1 person, it could even be 2 people sitting together on skype or in an office
            calling out names, it should take more than an evening or 2.
            ',

            'pac members / room reps can send notifications to their classes'=>0,
            'pac members / room reps can send notifications to their classes_note'=>'
            This is an idea, notice the unchecked box, and opinions are welcome. <br><br>
            Instead of a cumbersome trickle down human information system PAC emails me, I email my room constituents,
            perhaps school wide updates like the PAC meeting details can just be summarized and sent to the people who
            want notification. Either everyone if it\'s deemed important or, people who subscribed to news in some fashion.<br><br>
            When there are room specific issues, we could then pass those on directly as room reps.
            ',
        ],

        'GUARDIAN USE CASES (A CHECK MEANS IT\'S AGREED UPON)' => [
            'Guardian can register their children'=>1,
            'Guardian can add other guardians to their family' => 1,
            'Guardian can add other guardians to their family_note' => '
            Guardians who are added get a notification email to register',
            'Should invited guardians need to be confirmed by gatekeeper?'=>0,
            'Should invited guardians need to be confirmed by gatekeeper?_note'=>'
            For example, I go through registration and get confirmed. I then add another guardian Jane, and
            Jane gets an email to register. Jane registers and gets verified via email.<br><br>
            Does she need to get confirmed too?',
            'Guardians add children'=>1,
        ]
    ];
    
    public function render()
    {
        return view('livewire.checklist');
    }
    
    
    public function askMe()
    {
        $this->flash = $this->question;
        $this->question = '';
    }
}