#include "Human.cpp"

class SivitasAkademik : public Human
{
    protected:

        string asalUniv;
        string emailEdu;
    
    public:

        SivitasAkademik(){}

        ~SivitasAkademik(){}

        string getAsalUniv()
        {
            return asalUniv;
        }

        void setAsalUniv(string asalUniv)
        {
            this->asalUniv = asalUniv;
        }

        string getEmailEdu()
        {
            return emailEdu;
        }

        void setEmailEdu(string emailEdu)
        {
            this->emailEdu = emailEdu;
        }
};