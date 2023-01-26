TEMPLATE = app
CONFIG += console c++11
CONFIG -= app_bundle
CONFIG -= qt

INCLUDEPATH += ../../../../_HEADERS/

CONFIG(debug, debug|release) {
    DESTDIR = $$PWD/../../../Build/x86/Debug
    LIBS += \
        $$PWD/../../../Build/x86/Debug/CommandLayerEthernet.dll \
        $$PWD/../../../Build/x86/Debug/CommunicationLayerEthernet.dll
} else {
    DESTDIR = $$PWD/../../../Build/x86/Release
    win32{
        LIBS += \
	    $$PWD/../../../Build/x86/Release/CommandLayerEthernet.dll \
            $$PWD/../../../Build/x86/Release/CommunicationLayerEthernet.dll
    }
}

SOURCES += \
    ../../../Sources/Example_CartesianControl.cpp
win32 {
    HEADERS += \
        ../../../../_HEADERS/CommandLayer.h \
        ../../../../_HEADERS/CommunicationLayer.h \
        ../../../../_HEADERS/KinovaTypes.h
}

unix {
    HEADERS += \
        ../../../Sources/Kinova.API.EthCommandLayerUbuntu.h \
        ../../../Sources/Kinova.API.EthCommLayerUbuntu.h \
        ../../../Sources/KinovaTypes.h
    LIBS += -ldl
}
