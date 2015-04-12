#include <QApplication>
#include <QLabel>

int main(int argc , char *argv[]) {

    QApplication app(argc, argv);
    QLabel label("Hola, mi primer programa");

    label.show();
    return app.exec();

}
