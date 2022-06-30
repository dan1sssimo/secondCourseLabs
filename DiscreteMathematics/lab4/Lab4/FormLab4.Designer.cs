
namespace Lab4
{
    partial class FormLab4
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.pictureBoxScreen = new System.Windows.Forms.PictureBox();
            this.textBoxWeight = new System.Windows.Forms.TextBox();
            this.labelWeight = new System.Windows.Forms.Label();
            this.richTextBoxLog = new System.Windows.Forms.RichTextBox();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxScreen)).BeginInit();
            this.SuspendLayout();
            // 
            // pictureBoxScreen
            // 
            this.pictureBoxScreen.Anchor = ((System.Windows.Forms.AnchorStyles)(((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left)));
            this.pictureBoxScreen.BorderStyle = System.Windows.Forms.BorderStyle.Fixed3D;
            this.pictureBoxScreen.Location = new System.Drawing.Point(296, 14);
            this.pictureBoxScreen.Name = "pictureBoxScreen";
            this.pictureBoxScreen.Size = new System.Drawing.Size(575, 426);
            this.pictureBoxScreen.TabIndex = 0;
            this.pictureBoxScreen.TabStop = false;
            this.pictureBoxScreen.Click += new System.EventHandler(this.pictureBoxScreen_Click);
            this.pictureBoxScreen.MouseClick += new System.Windows.Forms.MouseEventHandler(this.pictureBoxScreen_MouseClick);
            // 
            // textBoxWeight
            // 
            this.textBoxWeight.Enabled = false;
            this.textBoxWeight.Location = new System.Drawing.Point(117, 27);
            this.textBoxWeight.Name = "textBoxWeight";
            this.textBoxWeight.Size = new System.Drawing.Size(83, 23);
            this.textBoxWeight.TabIndex = 1;
            // 
            // labelWeight
            // 
            this.labelWeight.AutoSize = true;
            this.labelWeight.Location = new System.Drawing.Point(12, 30);
            this.labelWeight.Name = "labelWeight";
            this.labelWeight.Size = new System.Drawing.Size(101, 15);
            this.labelWeight.TabIndex = 2;
            this.labelWeight.Text = "Мінімальна вага:";
            // 
            // richTextBoxLog
            // 
            this.richTextBoxLog.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.richTextBoxLog.Location = new System.Drawing.Point(12, 59);
            this.richTextBoxLog.Name = "richTextBoxLog";
            this.richTextBoxLog.Size = new System.Drawing.Size(271, 379);
            this.richTextBoxLog.TabIndex = 3;
            this.richTextBoxLog.Text = "";
            // 
            // FormLab4
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(7F, 15F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.Info;
            this.ClientSize = new System.Drawing.Size(883, 450);
            this.Controls.Add(this.richTextBoxLog);
            this.Controls.Add(this.labelWeight);
            this.Controls.Add(this.textBoxWeight);
            this.Controls.Add(this.pictureBoxScreen);
            this.Name = "FormLab4";
            this.Text = "Лабораторна робота №4. Савченко Д.П.";
            this.FormClosed += new System.Windows.Forms.FormClosedEventHandler(this.FormLab4_FormClosed);
            this.Load += new System.EventHandler(this.FormLab4_Load);
            this.Paint += new System.Windows.Forms.PaintEventHandler(this.FormLab4_Paint);
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxScreen)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.PictureBox pictureBoxScreen;
        private System.Windows.Forms.TextBox textBoxWeight;
        private System.Windows.Forms.Label labelWeight;
        private System.Windows.Forms.RichTextBox richTextBoxLog;
    }
}