# Profile Website

![Website Preview](screenshot.png) <!-- Optional: Add a screenshot -->

A personal portfolio website with a functional contact form powered by Formspree.

## Features

- Responsive design
- Contact form with Formspree integration
- Clean, modern UI
- Easy to customize

## Technologies Used

- HTML5
- CSS3
- JavaScript
- [Formspree](https://formspree.io/) (for form submissions)

## Contact Form Setup

The contact form uses Formspree to handle submissions. Here's how it works:

1. When a user submits the form:
   - Data is sent to Formspree's servers
   - Formspree validates the submission
   - You receive an email with the form data
   - User is redirected to thank-you page

### Form Fields

| Field     | Type      | Required |
|-----------|-----------|----------|
| Name      | text      | Yes      |
| Email     | email     | Yes      |
| Subject   | text      | Yes      |
| Message   | textarea  | Yes      |

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Tanmay-hash/profile-website.git

Open index.html in your browser
Customization

To modify the contact form:

Replace the Formspree ID in the form action:
html
action="https://formspree.io/f/YOUR_NEW_FORMSPREE_ID"
To change the redirect page after submission:
html
<input type="hidden" name="_next" value="URL_TO_YOUR_THANKYOU_PAGE">
To customize the email subject:
html
<input type="hidden" name="_subject" value="Your Custom Subject">
Deployment

The website is deployed on Vercel. To deploy your own version:

Fork this repository
Create a Vercel account
Connect your GitHub account
Import this repository
Deploy!
Deploy with Vercel

Troubleshooting

If the contact form isn't working:

Verify your Formspree ID is correct
Check that all form fields have name attributes
Ensure you've confirmed your Formspree email address
Test with simple data first
License

MIT License - see LICENSE file for details.

👨💻 Created by Tanmay Upadhyay

   
