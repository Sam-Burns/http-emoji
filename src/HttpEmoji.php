<?php
namespace SamBurns;

interface HttpEmoji
{
    const 🎉 = 200; // OK

    const 🔨 = 201; // Created

    const 👍 = 202; // Accepted

    const ➡️ = 301; // Moved permanently

    const 👉 = 302; // Moved temporarily

    const ☠❓ = 400; // Bad request

    const ✋ = 401; // Unauthorized

    const 💰 = 402; // Payment required

    const 🤷 = 404; // Not found

    const ❓⌛ = 408; // Request time-out

    const 🥊 = 409; // Conflict

    const 📏 = 411; // Length required

    const ☕ = 418; // I'm a teapot

    const 🚬 = 420; // Enhance your calm (Twitter)

    const ❓💯 = 429; // Too many requests

    const 🔞 = 450; // Blocked by parental controls (Microsoft)

    const ©️️ = 451; // Unavailable for legal reasons

    const 😱 = 500; // Internal server error

    const 🚪⌛ = 504; // Gateway time-out

    const 🤝⌛  = 522; // Connection timed out

    const 🔐🤝🚫 = 525; // SSL handshake failed (Cloudflare)
}

