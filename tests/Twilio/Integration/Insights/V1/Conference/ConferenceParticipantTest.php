<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Insights\V1\Conference;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class ConferenceParticipantTest extends HolodeckTestCase {
    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->insights->v1->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                       ->conferenceParticipants("CPXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://insights.twilio.com/v1/Conferences/CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Participants/CPXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "participant_sid": "CPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "label": null,
                "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "call_direction": "outbound",
                "from": "+10000000000",
                "to": "+1000000001",
                "call_state": "completed",
                "country_code": "US",
                "is_moderator": true,
                "join_time": "2021-10-08T02:58:59Z",
                "leave_time": "2021-10-08T03:00:02Z",
                "duration_seconds": 64,
                "whisper": null,
                "agent_audio": null,
                "outbound_queue_length": 0,
                "outbound_time_in_queue": 965,
                "jitter_buffer_size": null,
                "is_coach": false,
                "coached_participants": null,
                "participant_region": "us1",
                "conference_region": "us1",
                "call_type": "carrier",
                "quality_issues": 0,
                "properties": {
                    "start_conference_on_enter": true,
                    "end_conference_on_exit": false,
                    "play_early_media": true,
                    "enter_muted": false,
                    "beep_on_enter": false,
                    "beep_on_exit": false
                },
                "metrics": {
                    "inbound": {
                        "total_packets_lost": 0,
                        "total_packets_received": 49,
                        "packet_loss_percentage": 0.0,
                        "jitter": {
                            "avg": 0.34,
                            "max": 0.53
                        },
                        "latency": {
                            "avg": 0.0,
                            "max": 0.0
                        },
                        "mos": 4.4
                    },
                    "outbound": {
                        "total_packets_lost": 0,
                        "total_packets_received": 126,
                        "packet_loss_percentage": 0,
                        "jitter": {
                            "avg": 0.01,
                            "max": 0.01
                        },
                        "latency": {
                            "avg": 0,
                            "max": 0
                        },
                        "mos": 4.4,
                        "last_rtp_count": 1,
                        "unique_ssrc_count": 1
                    }
                },
                "events": null,
                "url": "https://insights.twilio.com/v1/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->insights->v1->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                             ->conferenceParticipants("CPXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testReadRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->insights->v1->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                       ->conferenceParticipants->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://insights.twilio.com/v1/Conferences/CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Participants'
        ));
    }

    public function testReadFullResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "page": 0,
                    "page_size": 25,
                    "first_page_url": "https://insights.twilio.com/v1/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants?PageSize=25&Page=0",
                    "previous_page_url": null,
                    "url": "https://insights.twilio.com/v1/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants?PageSize=25&Page=0",
                    "next_page_url": null,
                    "key": "participants"
                },
                "participants": [
                    {
                        "participant_sid": "CPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "label": null,
                        "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "call_direction": "outbound",
                        "from": "+10000000000",
                        "to": "+10000000001",
                        "call_state": "completed",
                        "country_code": "US",
                        "is_moderator": true,
                        "join_time": "2021-10-08T02:58:51Z",
                        "leave_time": "2021-10-08T02:59:55Z",
                        "duration_seconds": 65,
                        "whisper": null,
                        "agent_audio": null,
                        "outbound_queue_length": 0,
                        "outbound_time_in_queue": 3361,
                        "jitter_buffer_size": null,
                        "is_coach": false,
                        "coached_participants": null,
                        "participant_region": "us1",
                        "conference_region": "us1",
                        "call_type": "carrier",
                        "quality_issues": 0,
                        "properties": {
                            "start_conference_on_enter": true,
                            "end_conference_on_exit": false,
                            "play_early_media": true,
                            "enter_muted": false,
                            "beep_on_enter": false,
                            "beep_on_exit": false
                        },
                        "metrics": {
                            "inbound": {
                                "total_packets_lost": 0,
                                "total_packets_received": 70,
                                "packet_loss_percentage": 0.0,
                                "jitter": {
                                    "avg": 0.41,
                                    "max": 0.84
                                },
                                "latency": {
                                    "avg": 0.0,
                                    "max": 0.0
                                },
                                "mos": 4.4
                            },
                            "outbound": {
                                "total_packets_lost": 0,
                                "total_packets_received": 126,
                                "packet_loss_percentage": 0,
                                "jitter": {
                                    "avg": 0.01,
                                    "max": 0.01
                                },
                                "latency": {
                                    "avg": 0,
                                    "max": 0
                                },
                                "mos": 4.4,
                                "last_rtp_count": 1,
                                "unique_ssrc_count": 1
                            }
                        },
                        "events": null,
                        "url": "https://insights.twilio.com/v1/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    },
                    {
                        "participant_sid": "CPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaab",
                        "label": null,
                        "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaab",
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "call_direction": "outbound",
                        "from": "+10000000000",
                        "to": "+10000000002",
                        "call_state": "completed",
                        "country_code": "US",
                        "is_moderator": true,
                        "join_time": "2021-10-08T02:58:52Z",
                        "leave_time": "2021-10-08T02:59:54Z",
                        "duration_seconds": 63,
                        "whisper": null,
                        "agent_audio": null,
                        "outbound_queue_length": 0,
                        "outbound_time_in_queue": 321,
                        "jitter_buffer_size": null,
                        "is_coach": false,
                        "coached_participants": null,
                        "participant_region": "us1",
                        "conference_region": "us1",
                        "call_type": "carrier",
                        "quality_issues": 0,
                        "properties": {
                            "start_conference_on_enter": false,
                            "end_conference_on_exit": false,
                            "early_media": false,
                            "enter_muted": true,
                            "beep_on_enter": false,
                            "beep_on_exit": false
                        },
                        "metrics": {
                            "inbound": {
                                "total_packets_lost": 0,
                                "total_packets_received": 16,
                                "packet_loss_percentage": 0,
                                "jitter": {
                                    "avg": 0.26,
                                    "max": 0.45
                                },
                                "latency": {
                                    "avg": 0,
                                    "max": 0
                                },
                                "mos": 4.4,
                                "last_rtp_count": 1,
                                "unique_ssrc_count": 1
                            },
                            "outbound": {
                                "total_packets_lost": 0,
                                "total_packets_received": 42,
                                "packet_loss_percentage": 0,
                                "jitter": {
                                    "avg": 0.03,
                                    "max": 0.08
                                },
                                "latency": {
                                    "avg": 0,
                                    "max": 0
                                },
                                "mos": 4.4,
                                "tags": [
                                    "silent"
                                ],
                                "last_rtp_count": 1,
                                "unique_ssrc_count": 1
                            }
                        },
                        "events": {
                            "mute": [
                                1636007397844
                            ]
                        },
                        "url": "https://insights.twilio.com/v1/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaab"
                    }
                ]
            }
            '
        ));

        $actual = $this->twilio->insights->v1->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                             ->conferenceParticipants->read();

        $this->assertGreaterThan(0, \count($actual));
    }

    public function testReadWithLabelResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "page": 0,
                    "page_size": 25,
                    "first_page_url": "https://insights.twilio.com/v1/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants?Label=client&PageSize=25&Page=0",
                    "previous_page_url": null,
                    "url": "https://insights.twilio.com/v1/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants?Label=client&PageSize=25&Page=0",
                    "next_page_url": null,
                    "key": "participants"
                },
                "participants": [
                    {
                        "participant_sid": "CPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "call_direction": "outbound",
                        "from": "+10000000000",
                        "to": "+10000000001",
                        "call_state": "completed",
                        "country_code": "US",
                        "is_moderator": true,
                        "join_time": "2021-10-08T02:58:51Z",
                        "leave_time": "2021-10-08T02:59:55Z",
                        "duration_seconds": 65,
                        "label": "client",
                        "whisper": null,
                        "agent_audio": null,
                        "outbound_queue_length": 0,
                        "outbound_time_in_queue": 3361,
                        "jitter_buffer_size": null,
                        "is_coach": false,
                        "coached_participants": null,
                        "participant_region": "us1",
                        "conference_region": "us1",
                        "call_type": "carrier",
                        "quality_issues": 0,
                        "properties": {
                            "start_conference_on_enter": true,
                            "end_conference_on_exit": false,
                            "play_early_media": true,
                            "enter_muted": false,
                            "beep_on_enter": false,
                            "beep_on_exit": false
                        },
                        "metrics": {
                            "inbound": {
                                "total_packets_lost": 0,
                                "total_packets_received": 70,
                                "packet_loss_percentage": 0.0,
                                "jitter": {
                                    "avg": 0.41,
                                    "max": 0.84
                                },
                                "latency": {
                                    "avg": 0.0,
                                    "max": 0.0
                                },
                                "mos": 4.4
                            },
                            "outbound": {
                                "total_packets_lost": 0,
                                "total_packets_received": 96,
                                "packet_loss_percentage": 0,
                                "jitter": {
                                    "avg": 0.01,
                                    "max": 0.01
                                },
                                "latency": {
                                    "avg": 0,
                                    "max": 0
                                },
                                "mos": 4.4
                            }
                        },
                        "events": null,
                        "url": "https://insights.twilio.com/v1/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/CPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                ]
            }
            '
        ));

        $actual = $this->twilio->insights->v1->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                             ->conferenceParticipants->read();

        $this->assertNotNull($actual);
    }
}