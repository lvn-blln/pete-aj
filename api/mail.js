const nodemailer = require("nodemailer");

module.exports = async (req, res) => {
  if (req.method !== "POST") {
    return res.status(405).json({ message: "Method not allowed" });
  }

  const { name, email, message } = req.body;

  if (!name || !email || !message) {
    return res.status(400).json({ message: "All fields are required" });
  }

  const transporter = nodemailer.createTransport({
    service: "gmail",
    auth: {
      user: process.env.GMAIL_USER,
      pass: process.env.GMAIL_PASS
    }
  });

  try {
    await transporter.sendMail({
      from: `"Website Contact" <${process.env.GMAIL_USER}>`,
      to: process.env.GMAIL_USER,
      replyTo: email,
      subject: "New Contact Form Message",
      text:
        `Name: ${name}\n` +
        `Email: ${email}\n\n` +
        `Message:\n${message}`
    });

    return res.status(200).json({ message: "Message sent successfully" });

  } catch (err) {
    console.error("GMAIL ERROR:", err);
    return res.status(500).json({ message: "Email failed to send" });
  }
};