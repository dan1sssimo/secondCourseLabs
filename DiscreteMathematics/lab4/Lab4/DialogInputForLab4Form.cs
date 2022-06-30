using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace Lab4
{
    public partial class DialogInputForLab4Form : Form
    {
        public DialogInputForLab4Form()
        {
            InitializeComponent();
        }

        private void buttonOK_Click(object sender, EventArgs e)
        {
            FormLab4.weight = (int)numericUpDownWeight.Value;

            this.Close();
        }
    }
}
