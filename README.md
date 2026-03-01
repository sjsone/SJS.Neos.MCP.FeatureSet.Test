# SJS.Neos.MCP.FeatureSet.Test

MCP FeatureSet package for **connectivity and authentication smoke-testing**. Add this FeatureSet to a server to verify that the MCP endpoint is reachable and that the authenticated session is working correctly.

---

## FeatureSets & Tools

### `TestFeatureSet` — prefix `test`

| Tool | Description |
| --- | --- |
| `test_ping` | Echoes back an optional message. Useful for verifying basic connectivity. |
| `test_authenticated_user` | Returns details about the currently authenticated Neos user and their roles. |

---

## `test_ping`

**Input:** `message` (optional string)
**Output:** The message echoed back, or `"pong"` if omitted.

## `test_authenticated_user`

**Input:** none
**Output:** JSON object with account identifier, authentication provider, roles, active flag, creation date, last successful authentication, failed auth count, display name, and administrator flag.

Returns a plain-text error message if no authenticated user is found.
