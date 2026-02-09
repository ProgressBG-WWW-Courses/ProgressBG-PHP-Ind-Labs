# Pre-course questionnaire

---

## Your PHP & Programming Background

**Are you comfortable with command line / terminal?**

- [ ] Yes, I use it regularly
- [x] Basic commands only
- [ ] Prefer GUI tools
- [ ] No experience

**What's your experience level with Git?**

- [ ] Expert - I use Git daily, comfortable with branching, merging, rebasing
- [ ] Intermediate - I can do basic commits, pulls, and handle merge conflicts
- [ ] Beginner - I know basic commands like clone, add, commit, push
- [x] No experience - I'm new to Git

**Programming languages you're comfortable with:**

- [x] PHP: 7.4
- [ ] JavaScript
- [ ] Python
- [x] Java / C# / C++
- [ ] Other: _

**Have you built web applications before?** (Any framework/language)

- [ ] Yes, several projects
- [ ] Yes, one or two small projects
- [x] Only academic/learning projects
- [ ] This will be my first

**What concepts are you already familiar with?**

- [x] Object-Oriented Programming (classes, objects, inheritance)
- [ ] MVC architecture (Model-View-Controller)
- [ ] REST APIs
- [x] Databases and SQL
- [x] HTML/CSS/JavaScript basics
- [x] JSON/XML data formats
- [ ] Authentication & Authorization
- [ ] Git version control
- [ ] None of the above yet

---

## Development Environment

**Operating system used for development?**

- [ ] Windows 10/11
- [ ] Windows with WSL
- [ ] macOS (which version: _)
- [x] Linux (Debian 6.1)

**What is your current local development setup?**

- [ ] XAMPP / WAMP / MAMP
- [ ] Docker / Docker Compose
- [x] Directly installed (Apache/Nginx + MySQL + PHP)
- [ ] DDEV / Lando / Other local development tool: _
- [ ] I don't have a local environment yet

**Which PHP version do you use?**

- [ ] PHP 5.x
- [x] PHP 7.x
- [ ] PHP 8.x

**Which Web server you're using:**

- [x] Apache
- [ ] Nginx
- [ ] Apache + Nginx (reverse proxy)
- [ ] Built-in PHP server (php **-S)**
- [ ] Not sure
- [ ] Other: _

**Which database system do you use?**

- [ ] MySQL (version if known: _)
- [x] MariaDB
- [ ] PostgreSQL
- [ ] SQLite
- [ ] Not set up yet
- [ ] Other: _

---

## About the Existing Site

**What was your role in the development of the site?**

- [x] Main architect
- [ ] Main developer
- [ ] Site maintainer (developer + ops)
- [ ] Content editor / power user

**How do you currently access the code?**

- [x] I have full access to the server and codebase
- [x] FTP access
- [ ] Git repository (GitHub / GitLab / Bitbucket)
- [ ] Shared folder / Network drive
- [ ] I don't have access yet
- [ ] Other: _

**Which framework/platform is the site currently using?**

- [ ] Plain PHP (no framework)
- [ ] Zend Framework 1
- [x] Zend Framework 2
- [ ] Laminas (modern Zend)

**How is the application structured?**

- [x] Monolith: One big repo, one database, does everything (Front & Back).
- [ ] Headless/API: The PHP code just outputs JSON; a separate React/Vue app handles the frontend.
- [ ] Microservices: Many small PHP apps talking to each other.

**Where does the business logic mainly live?**

- [ ] In Controllers: (e.g., IndexController has 500+ lines of code).
- [ ] In Services: (Controllers are thin; logic is in Service classes).
- [ ] In Models: (Logic is inside the Database Table classes).
- [x] Not sure / It varies.

---

## Version Control & Deployment

**Is the project using Git or another version control system?**

- [ ] Yes, Git (GitHub / GitLab / Bitbucket)
- [ ] Yes, other system: _
- [x] No version control currently
- [ ] I don't know

**How are changes currently deployed to the live site?**

- [x] FTP upload
- [ ] Git pull on server
- [ ] Automated CI/CD pipeline
- [ ] Someone else handles deployment
- [ ] Site isn't live yet
- [ ] Other: _

---

## Revolut Integration Specifics

**Current payment situation:**

- [ ] Site has no payment system currently
- [x] Site uses another payment provider (which one: )
- [ ] Starting fresh with Revolut as first payment option

**What type of payments will you be processing?**

- [x] One-time payments (checkout/purchase)
- [ ] Recurring/subscription payments
- [ ] Both
- [ ] Not decided yet

**Revolut account status:**

- [x] I have a Revolut Merchant account already
- [ ] I'm in the process of setting one up
- [ ] Not started yet
- [ ] Someone else is handling this

**Timeline for going live with Revolut:**

- [ ] Urgent (2-4 weeks)
- [x] 1-2 months
- [ ] 3+ months
- [ ] Flexible / Learning phase

---

## Your Goals & Concerns

What's your main goal for this course? (Rank 1-3, with 1 being most important)

- [ ] Integrate Revolut payment successfully
- [x] Understand the codebase deeply
- [ ] Learn modern PHP & Zend/Laminas best practices
- [x] Be able to maintain and extend the site independently
- [ ] Other: _

**When learning on your own, what resources work best for you?**

- [x] Video tutorials / Recorded lectures
- [x] Blog posts / Written articles
- [x] Books / Technical documentation
- [x] Code examples & patterns
- [x] Learning by doing / Real project work

---