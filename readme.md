# DCKAP_ContactForm


## Overview
Sliding​ ​contact​ ​us​ ​is​ ​to​ ​provide​ ​a​ ​smooth​ ​interaction​ ​between​ ​the​ ​customer and​ ​the​ ​store​ ​owner.​ ​It​ ​enables​ ​us​ ​to​ ​maintain​ ​the​ ​list​ ​of​ ​all​ ​customers​ ​who​ ​have contacted​ ​the​ ​store​ ​owner.​ ​The​ ​store​ ​owner​ ​is​ ​notified​ ​by​ ​an​ ​email​ ​that contains​ ​the​ ​customer​ ​details​ ​and​ ​queries.​ ​This​ ​feature​ ​helps​ ​us​ ​in​ ​improving our customer​ ​experience.

This​ ​module​ ​helps​ ​the​ ​store​ ​owner​ ​to​ ​meet​ ​the​ ​customer​ ​needs.​ ​It​ ​allows​ ​the customer​ ​to​ ​send​ ​feedback​ ​to​ ​your​ ​site​ ​in​ ​the​ ​easiest​ ​way.​ ​It​ ​also​ ​takes​ ​the​ ​store owner​ ​one​ ​step​ ​closer​ ​to​ ​the​ ​customer.​ ​Since​ ​this​ ​form​ ​is​ ​AJAX-enabled,​ ​the customer​ ​can​ ​quickly​ ​submit​ ​the​ ​form​ ​without​ ​page​ ​reloading. 

## Features
- Customer​ ​details​ ​are​ ​stored​ ​and​ ​can​ ​be​ ​used​ ​for​ ​future​ ​clarifications.
- Once​ ​the​ ​customer​ ​submits​ ​the​ ​form,​ ​an​ ​email​ ​is​ ​sent​ ​to​ ​the​ ​store​ ​owner
with​ ​the​ ​respective​ ​details.
- Store​ ​Owner​ ​can​ ​manage​ ​all​ ​the​ ​requests​ ​from​ ​the​ ​backend.
- Email​ ​template​ ​can​ ​be​ ​changed​ ​from​ ​the​ ​backend.

## Version​ ​&​ ​Compatibility​ ​Support
**Version​** :​ ​1.0.0​ ​Stable

**Compatibility​** :
This extension is compatible with Magento Community 2.1x and Magento
Enterprise​ ​2.1x​ ​versions

## How​ ​to​ ​Install​ ​This​ ​Module?
**Step​ ​1:​** ​ ​Download​ ​the​ ​extension​ ​from​ ​My​ ​Downloadable​ ​Products​ ​in​ ​your account​ ​from​ ​our​ ​store​ ​or​ ​from​ ​Magento​ ​Marketplace.

**Step​ ​2:​** ​ ​Create​ ​a​ ​directory​ ​​`app\code\DCKAP\ContactForm​​` ​in​ ​your Magento​ ​root​ ​directory​ ​and​ ​unzip​ ​here.

**Step​ ​3:​** ​​ Disable​ ​the​ ​cache​ ​to​ ​avoid​ ​flushing​ ​the​ ​cache,​ ​very​ ​often.​ ​It​ ​may affect​ ​performance​ ​for​ ​a​ ​while.​ ​However,​ ​you​ ​can​ ​skip​ ​this​ ​step.​ ​If​ ​you​ ​do so,​ ​clean​ ​the​ ​cache​ ​manually​ ​whenever​ ​needed.
`php​ ​bin/magento​ ​cache:disable `

**Step​ ​4:** ​ ​Enter​ ​the​ ​following​ ​at​ ​the​ ​command​ ​line​ ​to​ ​enable​ ​the​ ​module.
`php​ ​bin/magento​ ​module:enable​ ​DCKAP_ContactForm`

**Step​ ​5:​** ​ ​Enter​ ​the​ ​following​ ​at​ ​the​ ​command​ ​line​ ​to​ ​run​ ​the​ ​setup​ ​scripts.
`php​ ​bin/magento​ ​setup:upgrade`

**Step​ ​6:​** ​ ​Enter​ ​the​ ​following​ ​at​ ​the​ ​command​ ​line​ ​if​ ​the​ ​mode​ ​is​ ​set​ ​to default​ ​or​ ​production​ ​to​ ​deploy​ ​all​ ​the​ ​static​ ​files.
`php​ ​bin/magento​ ​setup:static-content:deploy`

**Step 7:** ​​ Clear​ ​the​ ​cache​ ​to​ ​configure​ ​the​ ​settings​ ​in​ ​the backend​ ​(if​ ​you skipped​ ​Step3)
`php​ ​bin/magento​ ​cache:clean`

**Step​ ​8:​** Log in​ ​to​ ​Magento​ ​backend​ ​and​ ​navigate​ ​to​ `​​Store​ ​>​ ​Configuration >​ ​DCKAP​ ​>​ ​Contact​ ​Form​ `​ ​​ and​ ​configure​ ​the​ ​module.

**Step 9:​** ​​ Clear​ ​the​ ​cache​ ​to​ ​apply​ ​all​ ​the​ ​configurations​ ​(if​ ​you​ ​skipped Step3)
`php​ ​bin/magento​ ​cache:clean`

**Step​ ​10:​** ​​ Enable​ ​the​ ​cache​ ​once​ ​everything​ ​is​ ​done.​ ​Ignore,​ ​if​ ​you​ ​skip Step3.
`php​ ​bin/magento​ ​cache:disable`

That’s​ ​it.​ ​You​ ​are​ ​done.​ ​​If​ ​you​ ​still​ ​face​ ​any​ ​issues​ ​while​ ​installing,​ ​contact​ ​us​ ​at

 **extensions@dckap.com**

## General​ ​Configuration
- To​ ​configure​ ​the​ ​extension,​ ​go​ ​to​ ​​ **Stores​** ​ ​​ **>​** ​ ​​ **Configuration​** ​ ​and​ ​from​ ​the left​ ​side menu​ ​navigate​ ​to​ ​​ **DCKAP​** ​ ​​ **>​ ​Contact​ ​Form​**.
- Select​ `​Enabled​` ​to​ `​Yes​` ​for​ ​enabling​ ​the​ ​module​ ​and​ ​to​ ​display​ ​the​ ​sliding
  contact​ ​form​ ​in​ ​the​ ​front-end.
  
## Sender​ ​&​ ​Receiver​ ​Email​ ​Configuration

- Navigate​ ​to​ ​​ **Stores​** ​ ​​ **>​** ​ ​​ **Configuration​ ​>​ ​General​ ​>​ ​Contacts​** ​ ​to​ ​configure​ ​the​ ​store owner​ ​details​ ​to​ ​receive​ ​the​ ​contact​ ​form​ ​information.​ ​Here​ ​Store​ ​Owner​ ​has​ ​to provide​ ​the​ ​receiver​ ​and​ ​sender​ ​email​ ​information. 
- Specify​` ​Send​ ​Emails​ ​To​ `​to​ ​an​ ​email​ ​address​ ​to​ ​get​ ​the​ ​contact
  information​ ​mail​ ​received.
- Select​ `​Email​ ​Sender`​ ​and​ ​specify​ ​the​ ​Email​ ​Template​ ​to​ ​configure​ ​the
  custom​ ​email​ ​template.
- You​ ​can​ ​also​ ​add​ ​the​ ​mail​ ​template​ ​of​ ​your​ ​choice​ ​by​ ​navigating​ ​to
  **Marketing​ ​>​ ​Communications​ ​>​ ​Email​ ​Templates.**  
- To​ ​make​ ​changes​ ​in​ ​the​ ​default​ ​template,​ ​select​ ​and​ ​load​ ​the​ ​`Contact
  Form`​ ​template​ ​under​ ​`Add​ ​New​ ​Template`​ ​and​ ​make​ ​changes​ ​in​ ​the
  template​ ​content​ ​in​ ​the​ ​below-highlighted​ ​region.
  
 ## Manage​ ​Contacts​ ​Form
 
- Navigate to ​ **Customers > DCKAP > Contact Form** for managing the contacts received​ ​with​ ​the​ ​full​ ​details.​ ​Store​ ​Owner​ ​can​ ​also​ ​able​ ​to​ ​delete​ ​the​ ​requests.
- Once the form is submitted by the customer, the details are saved in the database and that information will be manageable from the admin
  panel.
- Meanwhile, an email also sent to the configured store owner email
  address.
- The store owner can view the contacted customer details and can delete the​ ​details​ ​after​ ​responding​ to ​the​ ​customer.   
