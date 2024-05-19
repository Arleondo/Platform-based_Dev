from flask import Flask

app = Flask(__name__)


@app.route('/')
def hello_world():  # put application's code here
    return 'Holo Mi querido Skibidi sigma ohio rizz GYAT'


@app.route('/about')
def about():
    return 'JIJIJIJA MI INSANIDAD ESPERO QUE ES ESTES INSANO WAZAAAAA'


if __name__ == '__main__':
    app.run()
