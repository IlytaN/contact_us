<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>contact us</title>
    <link rel="stylesheet" href="./src/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <header class="site-header">
      <div class="logo-menu-container">
        <div class="site-logo">
            <img alt="Mailbutler Support" src="https://support.mailbutler.io/wp-content/uploads/2018/03/logoWhite.svg" />
            <meta itemprop="headline" content="Mailbutler Support">
        </div>
        <div class="site-menu">
            <div class="menubtn">
              Contact Us
            </div>
        </div>
      </div>
    </header>
    <main class="site-main">
      <div class="contact-container">
          <h2 id="contact-heading">Contact Us</h2>
          <p>If you can’t find a solution to your problems in our Knowledge Base, you can contact us with your questions by
            quickly filling out this form below.</p>
          <!-- Contact Form -->
          <form method="post" action="email.php" class="contact-form" enctype="multipart/form-data">
            <div class="form-group">
              <label for="name">Name <span class="">*</span></label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email <span class="">*</span></label>
              <input type="email" class="form-control" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject">
            </div>
            <div class="form-group">
              <label for="email_type">Email type <span class="">*</span></label>
              <select name="email_type" class="form-control" id="email_type">
                <option value="AppleMail">AppleMail</option>
                <option value="Gmail">Gmail</option>
              </select>
            </div>
            <div class="form-group">
              <label for="version">Version</label>
              <input type="text" class="form-control" id="version" name="version" placeholder="eg. 2.x.y" pattern="[0-9].[0-9].[0-9]">
            </div>
            <div class="form-group">
              <label for="message">Question or message <span class="">*</span></label>
              <textarea class="form-control" rows="5" id="message" name="message" required placeholder="Try to describe your issue as detailed as possible, so our support team can better assist you. Screenshots are the best way to help us pinpoint your issue"></textarea>
            </div>
            <div class="form-group">
              <label for="attachment">Attach Screenshots</label>
              <div class="input-group mb-3">
              <input type="file" name="attachment[]" accept="image/*" class="btn">
              <input type="file" name="attachment[]" accept="image/*" class="btn">
              <input type="file" name="attachment[]" accept="image/*" class="btn">
              </div>
            </div>
            <button type="submit" class="btn btn-success">Send</button>
          </form>
      </div>
    </main>
    <footer class="site-footer">
      <div class="footer-container">
        <div class="copyright">
          <div class="">
            &copy; Copyright Mailbutler Support
          </div>
        </div>
        <div class="site-menu">
            <div class="footerbtn">
              Contact Us
            </div>
        </div>
      </div>
    </footer>
  </body>

</html>
