## happy path
* greet
  - utter_greet
* mood_great
  - utter_happy

## sad path 1
* greet
  - utter_greet
* mood_unhappy
  - utter_cheer_up
  - utter_did_that_help
* affirm
  - utter_happy

## say goodbye
* goodbye
  - utter_goodbye

## bot challenge
* bot_challenge
  - utter_iamabot

## library

* greet
    - utter_greet
* library
    - utter_library

## library location

* greet
    - utter_greet
* library
    - utter_library
* library_location
    - utter_library_location

## library timings

    - utter_greet
* greet
* library
    - utter_library
* library_timings
    - utter_library_timings
    - utter_did_that_help
* affirm
    - utter_happy

## library borrow

* greet
    - utter_greet
* library
    - utter_library
* library_borrow
    - utter_library_borrow
    - utter_did_that_help
* affirm
    - utter_happy

## library return

* greet
    - utter_greet
* library
    - utter_library
* library_return
    - utter_library_return
    - utter_did_that_help
* affirm
    - utter_happy

## library incharge

* greet
    - utter_greet
* library
    - utter_library
* library_incharge
    - utter_library_incharge
     - utter_did_that_help
* affirm
    - utter_happy

## library other questions

* greet
    - utter_greet
* library
    - utter_library
* other_questions
    - utter_other_questions

## transport avail

* greet
    - utter_greet
* utter_transport
    - utter_transport
* trans_avail
    - utter_trans_avail
    - utter_did_that_help
* affirm
    - utter_happy

## Transport fee

    - utter_greet
* greet
* transport
    - utter_transport
* trans_fee
    - utter_trans_fee
    - utter_did_that_help
* affirm
    - utter_happy

## New Story

* greet
    - utter_greet
* transport
    - utter_transport
* other_questions
    - utter_other_questions
* library timings
    - utter_library_timings
* affirm
    - utter_happy

## New Story

* greet
    - utter_greet
* hostel
    - utter_hostel
* hostel_timings
    - utter_hostel_timings
    - utter_did_that_help
    - utter_accept
* affirm
    - utter_happy

## New Story

* greet
    - utter_greet
* hostel
    - utter_hostel
* hostel_incharge
    - utter_hostel_incharge
    - utter_did_that_help
* affirm
    - utter_happy

## hostel other questions

    - utter_greet
* greet
* hostel
    - utter_hostel
* other_questions
    - utter_other_questions
* utter_clg_open
    - utter_clg_open
* affirm
    - utter_happy

## sorry path

    
* greet
   - utter_greet
* library_timings
    - utter_library_timings
    - utter_did_that_help
* deny
    - utter_sorry

## New Story

    - utter_greet
* greet
* hostel_incharge
    - utter_hostel_incharge
    - utter_did_that_help

## map


    - utter_greet
* greet
    - utter_others
* greet
* map
    - utter_map
    - utter_did_that_help
* affirm
    - utter_happy

## im lost map

* greet
    - utter_greet
* map
    - utter_map
    - utter_did_that_help
* deny
    - utter_I_don't_know
* affirm

## faculty

    - utter_greet
* greet
    - utter_others
* faculty
    - utter_faculty
    - utter_did_that_help
* affirm
    - utter_happy

## hospital map

    - utter_greet
* greet
    - utter_emergency_hospital
    - utter_hospital_map
    - utter_did_that_help
* affirm
    - utter_goodbye

## ccg

* greet
    - utter_greet
* others
    - utter_others
* administration
    - utter_administration
* ccg
    - utter_ccg
    - utter_internship_1
    - utter_internship_2
    - utter_did_that_help
* affirm

## events

* greet
    - utter_greet
* others
    - utter_others
* events
    - utter_events1
    - utter_events2
    - utter_event3
    - utter_more_info
    - utter_did_that_help
* affirm
    - utter_happy

## emergency

* greet
    - utter_greet
* emergency_hospital
    - utter_emergency_hospital
    - utter_hospital_map
    - utter_did_that_help
* affirm
    - utter_accept

## greet

* greet
    - utter_greet

## faculty_1

* greet
    - utter_greet
* others
    - utter_others
* faculty
    - utter_faculty
    - utter_did_that_help
* affirm
    - utter_accept

## anti-ragging

* greet
    - utter_greet
* others
    - utter_others
* administration
    - utter_administration
* anti_ragging
    - utter_anti_ragging
    - utter_did_that_help
* affirm
    - utter_happy

## anti-ragging_1

* anti_ragging
    - utter_anti_ragging
    - utter_did_that_help
* affirm
    - utter_happy

## lost stories

* greet
    - utter_greet
* utter_lost
    - utter_lost
    - utter_did_that_help
* affirm
    - utter_happy

## lost stories_1

* utter_lost
    - utter_lost
    - utter_did_that_help
* deny
    - utter_sorry

## lost_stories_3

* utter_lost
    - utter_lost
    - utter_did_that_help
* affirm
    - utter_happy

## lost stories_map

* map
    - utter_map
    - utter_did_that_help
* deny
    - utter_I_don't_know

## complaints

* greet
    - utter_greet
* others
    - utter_others
* administration
    - utter_administration
* register_complaints
    - utter_register_complaints

## complaints_1

* greet
    - utter_greet
* register_complaints
    - utter_register_complaints

## greeting

    
* greet

    - utter_greet

## Contact details for administration

* greet
    - utter_greet
* others
    - utter_others
* administration
    - utter_administration
* Contact_details
    - utter_Contact_details
    - utter_did_that_help
* affirm
    - utter_happy
