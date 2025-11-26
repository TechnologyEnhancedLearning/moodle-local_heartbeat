# local_heartbeat

A lightweight Moodle plugin that sends periodic heartbeat (keep-alive) requests
to an external endpoint (e.g., Learning Hub session keepalive URL).

## Installation

1. Copy folder to: moodle/local/heartbeat
2. Visit Site administration → Notifications to complete installation.
3. Configure at:
   Site administration → Plugins → Local plugins → Heartbeat

## Settings

- **keepaliveurl** — external URL to ping periodically.
- **interval** — number of seconds between pings.

## Notes

- Injects JS into all Moodle pages.
- Sends authenticated fetch() calls using browser cookies.
- Stores no personal data.
